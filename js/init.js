// (function (){
//   var type = document.getElementById ('equipmentType');
//   var model =  document.getElementById ('model');
//   var cameras = {
//     a: 'Medicina',
//     b: 'Chirurgia',
//     c: 'Ortopedia'
//   };
//
//   var projectors = {
//     a: 'Neurologia',
//     b: 'Fioterapia',
//     c: 'Farmacia'
//   };
//
//   addEvent(type, 'change', function(){
//     if (this.value==='choose'){
//       model.innerHTML = '<option>please</option>';
//       return;
//     }
//     var model = getModels(this.value);
//
//     var option = '<option>please</option>';
//     for (var key models){
//       options += '<option value="'+ key +'">' + models[key] + '</option>';
//     model.innerHTML = options;
//   });
//
//   function getModels(equipmentType){
//     if (equipmentType === 'cameras')
//     return cameras;
//   } else if (equipmentType === 'projectors'){
//     return projectors;
//   }
// }
//
// }());

$(function(){
  // bind change event to select
  $('#unitSelect').on('change', function () {
      var url = $(this).val(); // get selected value
      if (url) { // require a URL
          window.location = url; // redirect
      }
      return false;
  });


});
