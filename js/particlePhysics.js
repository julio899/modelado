(function($, Physics, ParticlePhysics) {

    var container = $('#particle-wrapper');
    var W = container.width();
    var H = container.height();
    var canvas, ctx;
    var particles;
    var animate = true;
    var mouse = {};

    ParticlePhysics.attract = false;
    ParticlePhysics.physics = new Physics();

    var mass = 0.2;
    var attractionStrength = 500;
    var attractionWidth = 50;
    var anchor = ParticlePhysics.physics.makeParticle(2, W, H / 2);
    anchor.makeFixed();


    function attach() {
        window.addEventListener( 'resize', resize );
        window.addEventListener( 'mousemove', onWindowMouseMove );
    }

    function resize() {
        W = container.width();
        H = container.height();
        canvas[0].width = W;
        canvas[0].height = H;
        canvas.width(W);
        canvas.height(H);

        if(container.is(':hidden')) {
            ParticlePhysics.physics.pause();
        } else {
            ParticlePhysics.physics.play();
        }
    }

    function onWindowMouseMove(e) {

        var x = e.clientX - canvas.offset().left;
        var y = e.clientY;

        mouse.x = x;
        mouse.y = y;

        anchor.position.set(x, y);

    }

    ParticlePhysics.render = function() {
        if ( animate ) {
            ctx.clearRect( 0, 0, W, H );

            var i = 0;
            var p;
            for ( i in particles ) {
                p = particles[i];

                if (p.alpha <= 0) {
                    resetParticle(p);
                }

                if(ParticlePhysics.attract) {
                    if(mouse.x < 0 || mouse.x > W || mouse.y > H){
                        p.attraction.on = false;
                    } else {
                        p.attraction.on = true;
                    }
                } else {
                    p.attraction.on = false;
                }

                p.position.x += p.velo;
                p.alpha -= 0.001;

                ctx.beginPath();
                ctx.arc( p.position.x, p.position.y, p.scale * 10, 0, 2 * Math.PI, false );
                ctx.fillStyle = 'rgba(255,255,255,' + p.alpha + ')';
                ctx.fill();
            }
        }
    };

    function resetParticle(p) {
        p.position.x = W / 4 * Math.random() - W / 4;
		p.position.y = H * Math.random();
        p.velo = Math.random() + 0.5;
        p.scale = 0.05 + Math.random() * 0.35;
        p.alpha = 0.1 + Math.random() * 0.4;
    }


    ParticlePhysics.init = function() {

        container.append('<canvas id="particleCanvas"></canvas>');
        canvas = $('#particleCanvas');
        canvas[0].width = W;
        canvas[0].height = H;
        canvas.width(W);
        canvas.height(H);
        ctx = canvas[0].getContext( '2d' );

        particles = [];

        var elemNumber = H * 1.5;
        var i = 0;
        var particle;

        for ( i; i < elemNumber; i++ ) {
            particle = ParticlePhysics.physics.makeParticle(mass, 0, H * Math.random());
            resetParticle(particle);
            particle.attraction = ParticlePhysics.physics.makeAttraction(anchor, particle, attractionStrength, attractionWidth);
            particle.attraction.on = false;
            particles.push( particle );
        }

        attach();
        ParticlePhysics.physics.onUpdate(ParticlePhysics.render);
        ParticlePhysics.render();
        ParticlePhysics.physics.toggle();
    };
}(jQuery, window.Physics, window.ParticlePhysics = window.ParticlePhysics || {}));