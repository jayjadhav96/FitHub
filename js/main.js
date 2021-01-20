$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});


// //
// $(window).scroll(function () {
//         if ($(document).scrollTop() > 100) {
//           $(".navbar-top").css({
//             height: "60px",
//             "transition-duration": "200ms",
//             background: "#2F2E41",
//             "box-shadow": "2px 6px 10px rgba(0,0,0,0.3)",
//           });
//         }
        // else {
        //   $(".navbar").css({
        //     height: "60px",
        //   //   background: "#2F2E41",
        //   //   "box-shadow": "none",
        //    });
        // }
      // });
