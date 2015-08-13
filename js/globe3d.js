(function($, THREE, Globe) {

    Globe.webgl_detect = function(return_context)
    {
        if (!!window.WebGLRenderingContext) {
            var canvas = document.createElement("canvas"),
                 names = ["webgl", "experimental-webgl", "moz-webgl", "webkit-3d"],
               context = false;

            for(var i=0;i<4;i++) {
                try {
                    context = canvas.getContext(names[i]);
                    if (context && typeof context.getParameter == "function") {
                        // WebGL is enabled
                        if (return_context) {
                            // return WebGL object if the function's argument is present
                            return {name:names[i], gl:context};
                        }
                        // else, return just true
                        return true;
                    }
                } catch(e) {}
            }

            // WebGL is supported, but disabled
            return false;
        }

        // WebGL not supported
        return false;
    };

    var container = $('#globe-wrapper');
    var W = container.width();
    var H = container.height();

    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera( 45, W/H, 0.1, 1000 );
    var renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    var controls = new THREE.OrbitControls( camera, renderer.domElement );
    //var keyboard = new THREEx.KeyboardState();
    var clock = new THREE.Clock();

    var globeGroup = new THREE.Object3D();

    var earthGeom = new THREE.SphereGeometry(30, 64, 64);
    var earthMaterial = new THREE.MeshLambertMaterial({
        color: 0xffffff,
        transparent: true,
        opacity: 0,
        needsUpdate: true
    });
    var earth = new THREE.Mesh(earthGeom, earthMaterial);
    var earthTextures = {};

    var cloudGeom = new THREE.SphereGeometry(30.1, 64, 64);
    var cloudMaterial = new THREE.MeshLambertMaterial({
        color: 0xffffff,
        transparent: true,
        opacity: 0
    });
    var cloudLayer = new THREE.Mesh(cloudGeom, cloudMaterial);

    var ringGeom = new THREE.TorusGeometry(33, 0.075, 8, 96);
    var ringMaterial = new THREE.MeshLambertMaterial( { color: 0x538381, transparent: true, opacity: 1 } );
    var ring = new THREE.Mesh(ringGeom, ringMaterial);

    var ringMobileGeom = new THREE.TorusGeometry(33, 0.15, 8, 96);
    var ringMobileMaterial = new THREE.MeshLambertMaterial( { color: 0x538381, transparent: true, opacity: 0 } );
    var ringMobile = new THREE.Mesh(ringMobileGeom, ringMobileMaterial);

    var hemilight = new THREE.HemisphereLight(0xffffff, 0x999999, 1);

    var satelliteTexture;
    var satelliteMaterial = new THREE.SpriteMaterial({
        color: 0xffffff,
        transparent: true,
        opacity: 0,
        fog: true
    });
    var satelliteSprite = new THREE.Sprite( satelliteMaterial );
    var satelliteGroups = [];

    var satelliteConfig = [
        { size: 33.1, rotationX: 45, rotationY: 75 },
        { size: 33.1, rotationX: -45, rotationY: -75 },
        { size: 33.1, rotationX: 75, rotationY: 10 },
        { size: 33.1, rotationX: 75, rotationY: -10 }
    ];


    Globe.randomSpeed = function() {
        return Math.random() * (4 - 2) + 2;
    };

    Globe.hideSatellites = function() {
        for(var i = 0; i < satelliteGroups.length; i++) {
            satelliteGroups[i].visible = false;
        }
    };

    Globe.showSatellites = function() {
        for(var i = 0; i < satelliteGroups.length; i++) {
            satelliteGroups[i].visible = true;
        }
    };


    Globe.update = function() {

        var t0 = clock.getElapsedTime();

        controls.update();

        earth.rotation.y += 0.0005;
        cloudLayer.rotation.y += 0.001;

        for(var i = 0; i < satelliteGroups.length; i++) {
            var sat = satelliteGroups[i].getObjectByName('satSprite');
            sat.position.x = satelliteGroups[i].size * Math.cos(t0 / satelliteGroups[i].speed);
            sat.position.y = satelliteGroups[i].size * Math.sin(t0 / satelliteGroups[i].speed);
        }
    };


    Globe.render = function () {
        requestAnimationFrame( Globe.render );
        renderer.render(scene, camera);
        Globe.update();
    };


    Globe.init = function(staticPath) {

        THREE.ImageUtils.crossOrigin = '';

        renderer.setSize( W, H );
        renderer.setClearColor( 0x000000, 0);
        renderer.shadowMapEnabled = true;
        renderer.shadowMapSoft = true;
        renderer.shadowMapType = THREE.PCFSoftShadowMap;

        container.append( renderer.domElement );

        camera.position.set(30, 50, 75);
        camera.lookAt(scene.position);

        controls.noZoom = true;

        hemilight.position.set(-5,10,5);

        earthTextures.stations = THREE.ImageUtils.loadTexture( staticPath + '/globe-groundstations.jpg' );
        earthTextures.offices = THREE.ImageUtils.loadTexture( staticPath + '/globe-offices.jpg', null, function() {
            earthMaterial.opacity = 1;
        });
        earthMaterial.map = earthTextures.offices;

        var cloudTexture = THREE.ImageUtils.loadTexture( staticPath + '/globe-cloudmap.jpg', null, function() {
            cloudMaterial.opacity = 1;
        });
        cloudMaterial.alphaMap = cloudTexture;
        cloudMaterial.transparent = true;

        /******* SATELLITE STUFF *******/
        ring.name = 'satRing';
        ringMobile.name = 'mobileRing';
        satelliteSprite.name = 'satSprite';
        satelliteSprite.scale.set(2, 2, 2);
        satelliteTexture = THREE.ImageUtils.loadTexture( staticPath + '/satellite-icon.png', null, function() {
            satelliteMaterial.opacity = 1;
        });
        satelliteMaterial.map = satelliteTexture;

        var satelliteGroup = new THREE.Object3D();
        satelliteGroup.add( ring );
        satelliteGroup.add( ringMobile );
        satelliteGroup.add( satelliteSprite );

        for(var s = 0; s < satelliteConfig.length; s++) {
            var cfg = satelliteConfig[s];
            var tempSat = satelliteGroup.clone();
            tempSat.rotation.x = THREE.Math.degToRad(cfg.rotationX);
            tempSat.rotation.y = THREE.Math.degToRad(cfg.rotationY);
            tempSat.size = cfg.size;
            tempSat.speed = Globe.randomSpeed();
            satelliteGroups.push(tempSat);
        }
        /****************** *******************/

        globeGroup.add(earth);
        globeGroup.add(cloudLayer);

        for(var i = 0; i < satelliteGroups.length; i++) {
            globeGroup.add(satelliteGroups[i]);
        }

        scene.add( camera );
        scene.add( hemilight );
        scene.add( globeGroup );

//        keyboard.domElement.addEventListener('keydown', function(event) {
//            if (event.repeat) {
//                return;
//            }
//
//            if ( keyboard.pressed('t') ){
//                window.open( renderer.domElement.toDataURL("image/png"), "ScreenShot");
//            }
//        });

        Globe.winResize = new THREEx.WindowResize(renderer, camera, function() {
            var size = { width: 500, height: 500 };

            for(var i = 0; i < satelliteGroups.length; i++) {
                var tmpSat = satelliteGroups[i].getObjectByName('satSprite');
                var tmpRing = satelliteGroups[i].getObjectByName('satRing');
                var tmpMRing = satelliteGroups[i].getObjectByName('mobileRing');
                tmpSat.scale.set(2, 2, 2);
                tmpRing.material.opacity = 1;
                tmpRing.scale.set(1, 1, 1);
                tmpMRing.material.opacity = 0;
                tmpMRing.scale.set(0.01, 0.01, 0.01);
            }

            if(window.innerWidth < 1200 && window.innerWidth > 767) {
                size.width = 450;
                size.height = 450;
            } else if(window.innerWidth < 480) {
                for (var i = 0; i < satelliteGroups.length; i++) {
                    var tmpSat = satelliteGroups[i].getObjectByName('satSprite');
                    var tmpRing = satelliteGroups[i].getObjectByName('satRing');
                    var tmpMRing = satelliteGroups[i].getObjectByName('mobileRing');
                    tmpSat.scale.set(4, 4, 4);
                    tmpRing.material.opacity = 0;
                    tmpMRing.scale.set(0.01, 0.01, 0.01);
                    tmpMRing.material.opacity = 1;
                    tmpMRing.scale.set(1, 1, 1);
                }
                size.width = 200;
                size.height = 200;
            } else if(window.innerWidth < 768) {
                size.width = 320;
                size.height = 320;
            } else {
                size.width = 500;
                size.height = 500;
            }
            return size;
        });

        $('.globe-controls li').click(function() {
            if(!$(this).hasClass('active')) {
                $('.globe-controls li').removeClass('active');
                $(this).addClass('active');
                Globe.hideSatellites();
                switch($(this).data('name')) {
                    case 'offices':
                        earthMaterial.map = earthTextures.offices;
                        break;
                    case 'satellites':
                        Globe.showSatellites();
                        break;
                    case 'groundstations':
                        earthMaterial.map = earthTextures.stations;
                        break;
                }
            }
        });

        Globe.hideSatellites();
        Globe.render();
        Globe.winResize.trigger();
    };

}(jQuery, window.THREE, window.Globe = window.Globe || {}));