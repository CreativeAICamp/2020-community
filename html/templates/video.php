<!-- three.js library -->
<script src='vendor/three.js/build/three.min.js'></script>
<!-- three.js load GLTF -->
<script src='vendor/three.js/GLTFLoader.js'></script>
<!-- ar.js -->
<script src='../build/ar-nft.js'></script>

<script>THREEx.ArToolkitContext.baseURL = '../'</script>

<body style='position: absolute; top: 0; left: 0; width: 100%; height: 100%; margin : 0px; overflow: hidden;'>
    <style>
        .arjs-loader {
            margin: 0 auto;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .arjs-loader-spinner {
            z-index: 10;
            -webkit-transform: spin 1s linear infinite;
            animation: spin 1s linear infinite;
            border: 3px solid #ddd;
            border-top: 3px solid #42a5f5;
            border-radius: 50%;
            height: 75px;
            width: 75px;
        }

        @-webkit-keyframes spin {
            to {
                border-top-color: #42a5f5;
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spin {
            to {
                border-top-color: #42a5f5;
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <div class="arjs-loader">
        <div class="arjs-loader-spinner"></div>
    </div>
    <script>
        //////////////////////////////////////////////////////////////////////////////////
        //		Init
        //////////////////////////////////////////////////////////////////////////////////

        var renderer = new THREE.WebGLRenderer({
            antialias: true,
            alpha: true,
            precision: 'mediump',
        });

        var clock = new THREE.Clock();

        var mixers = [];

        renderer.setPixelRatio(window.devicePixelRatio);

        renderer.setClearColor(new THREE.Color('lightgrey'), 0)
        renderer.setSize( window.innerWidth, window.innerHeight );
        renderer.domElement.style.position = 'absolute'
        renderer.domElement.style.top = '0px'
        renderer.domElement.style.left = '0px'
        document.body.appendChild( renderer.domElement );

        // init scene and camera
        var scene = new THREE.Scene();

        //////////////////////////////////////////////////////////////////////////////////
        //		Initialize a basic camera
        //////////////////////////////////////////////////////////////////////////////////

        // Create a camera
        var camera = new THREE.Camera();
        scene.add(camera);

        var light = new THREE.AmbientLight(0xffffff);
        scene.add(light);

        ////////////////////////////////////////////////////////////////////////////////
        //          handle arToolkitSource
        ////////////////////////////////////////////////////////////////////////////////

        var arToolkitSource = new THREEx.ArToolkitSource({
            sourceType : 'webcam',
            sourceWidth: 480,
            sourceHeight: 640,
        })

        arToolkitSource.init(function onReady(){
            // use a resize to fullscreen mobile devices
            setTimeout(function() {
                onResize()
            }, 1000);
        })

        // handle resize
        window.addEventListener('resize', function(){
            onResize()
        })

        // listener for end loading of NFT marker
        window.addEventListener('arjs-nft-loaded', function(ev){
          console.log(ev);
        })

        function onResize(){
            arToolkitSource.onResizeElement()
            arToolkitSource.copyElementSizeTo(renderer.domElement)
            if( arToolkitContext.arController !== null ){
                arToolkitSource.copyElementSizeTo(arToolkitContext.arController.canvas)
            }
        }

        ////////////////////////////////////////////////////////////////////////////////
        //          initialize arToolkitContext
        ////////////////////////////////////////////////////////////////////////////////

        // create atToolkitContext
        var arToolkitContext = new THREEx.ArToolkitContext({
            detectionMode: 'mono',
            canvasWidth: 480,
            canvasHeight: 640,
        }, {
            sourceWidth: 480,
            sourceHeight: 640,
        })

        // initialize it
        arToolkitContext.init(function onCompleted(){
            // copy projection matrix to camera
            camera.projectionMatrix.copy( arToolkitContext.getProjectionMatrix() );
        })

        ////////////////////////////////////////////////////////////////////////////////
        //          Create a ArMarkerControls
        ////////////////////////////////////////////////////////////////////////////////

        // init controls for camera
        var markerControls = new THREEx.ArMarkerControls(arToolkitContext, camera, {
            type : 'nft',
            descriptorsUrl : 'data/dataNFT/pinball',
            changeMatrixMode: 'cameraTransformMatrix'
        })

        scene.visible = false

        var root = new THREE.Object3D();
        scene.add(root);

        //////////////////////////////////////////////////////////////////////////////////
        //		add an object in the scene
        //////////////////////////////////////////////////////////////////////////////////

        var threeGLTFLoader = new THREE.GLTFLoader();
        var model;

        threeGLTFLoader.load("./resources/Flamingo.glb", function (gltf) {
            model = gltf.scene.children[0];
            model.name = 'Flamingo';

            var animation = gltf.animations[0];
            var mixer = new THREE.AnimationMixer(model);
            mixers.push(mixer);
            var action = mixer.clipAction(animation);
            action.play();

            root.matrixAutoUpdate = false;
            root.add(model);

            model.position.z = -200;
            model.position.x = 100;
            model.position.y = 100;


            //////////////////////////////////////////////////////////////////////////////////
            //		render the whole thing on the page
            //////////////////////////////////////////////////////////////////////////////////

            var animate = function() {
                requestAnimationFrame(animate);

                if (mixers.length > 0) {
                    for (var i = 0; i < mixers.length; i++) {
                        mixers[i].update(clock.getDelta());
                    }
                }

                if (!arToolkitSource.ready) {
                    return;
                }

                arToolkitContext.update( arToolkitSource.domElement )

                // update scene.visible if the marker is seen
                scene.visible = camera.visible;

                renderer.render(scene, camera);
            };

            requestAnimationFrame(animate);
        }
    );
    </script>
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>

<style>
  .arjs-loader {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .arjs-loader div {
    text-align: center;
    font-size: 1.25em;
    color: white;
  }
</style>

<!-- rawgithack development URL -->
<script src='https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js'></script>

<body style='margin : 0px; overflow: hidden;'>
   <!-- minimal loader shown until image descriptors are loaded -->

    <a-scene
        vr-mode-ui="enabled: false;"
        renderer="logarithmicDepthBuffer: true;"
        embedded arjs='trackingMethod: best; sourceType: webcam; debugUIEnabled: false;'>

        <!-- use rawgithack to retrieve the correct url for nft marker (see 'trex' below) -->
        <a-nft
            type='nft' url='https://arjs-cors-proxy.herokuapp.com/https://raw.githack.com/AR-js-org/AR.js/master/aframe/examples/image-tracking/nft/trex/trex-image/trex'
            smooth='true' smoothCount='10' smoothTolerance='0.01' smoothThreshold='5'>
            <a-entity
                gltf-model='https://arjs-cors-proxy.herokuapp.com/https://raw.githack.com/AR-js-org/AR.js/master/aframe/examples/image-tracking/nft/trex/scene.gltf'
                scale="5 5 5"
                position="100 100 0"
                >
            </a-entity>
        </a-nft>
		<a-entity camera></a-entity>
    </a-scene>
