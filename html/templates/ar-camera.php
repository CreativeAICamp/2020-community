<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
<script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>

<body style="margin: 0; overflow: hidden;">
    <a-scene
      vr-mode-ui="enabled: false"
      embedded
      arjs="sourceType: webcam; debugUIEnabled: false;"
    >
        <a-image 
            src="img/Mascot_Lop.png"
            look-at="[gps-camera]"
            scale="1.5 1.5 1.5"
            gps-entity-place="latitude: 13.729638; longitude: 100.530141;"
        ></a-image>
      <a-camera gps-camera rotation-reader> </a-camera>
    </a-scene>
</body>