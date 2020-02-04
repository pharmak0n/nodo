AFRAME.registerComponent('markerhandler', {
	tick:function() {
		if(document.querySelector('a-marker').object3D.visible == true) {
			//console.log("visible")
			document.getElementById('call-to-action').style.opacity = '1';
			document.querySelector("a").addEventListener("click", (e)=>{
				console.log("show more")
			})
		} else {
			//console.log("not visible")
		}
	}
});

// 
// AFRAME.registerComponent('videohandler', {
// 	tick:function() {
// 		if(document.querySelector('a-marker').object3D.visible == true) {
// 			console.log("play")
// 			var video = this.el.components.material.material.map.image;
// 			if (!video) { return; }
// 			video.play();
// 		} else {
// 			//console.log("not visible")
// 			//document.getElementById('museum').pause();
// 		}
// 	}
// });
//
//
// AFRAME.registerComponent('playclick', {
//   init: function () {
//     this.onClick = this.onClick.bind(this);
//   },
//   play: function () {
//     window.addEventListener('click', this.onClick);
//   },
//   pause: function () {
//     window.removeEventListener('click', this.onClick);
//   },
//   onClick: function (evt) {
//     var video = this.el.components.material.material.map.image;
//     if (!video) { return; }
//     video.play();
//   }
// });
