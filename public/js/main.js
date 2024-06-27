

  // event will be executed when the toggle-button is clicked
  document.getElementById("button-toggle").addEventListener("click", () => {

    // when the button-toggle is clicked, it will add/remove the active-sidebar class
    document.getElementById("sidebar").classList.toggle("active-sidebar");



    // when the button-toggle is clicked, it will add/remove the active-main-content class
    document.getElementById("main-content").classList.toggle("active-main-content");
    document.getElementById("navbar").classList.toggle("active-main-content");
    document.getElementById("button-toggle").classList.toggle("btn-roll");


    
  });


  $(document).ready(function () {

    setTimeout(() => {
      scrollToActiveElement()
    }, 100);
   


  });



  function scrollToActiveElement() {
    const activeElement = document.querySelector('.menu.actip');
    if (activeElement) {
      activeElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  }





  $('#searchInput').on('keyup', function() {
    let value = $(this).val().toLowerCase();
    let $tableRows = $('#table_data tbody tr');
    let $noResultRow = $('#noResultRow');

    // Filter baris tabel berdasarkan nilai input
    $tableRows.filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });

    // Periksa apakah ada hasil pencarian
    let hasSearchResults = $tableRows.filter(':visible').length > 0;

    // Tampilkan atau sembunyikan baris "Tidak ada pencarian" sesuai dengan hasil pencarian
    $noResultRow.toggle(!hasSearchResults);
  });



  $('#searchMenu').on('keyup', function() {
    let value = $(this).val().toLowerCase();
    let $tableRows = $('.menu');


    // Filter baris tabel berdasarkan nilai input
    $tableRows.filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });

    // Periksa apakah ada hasil pencarian
    let hasSearchResults = $tableRows.filter(':visible').length > 0;


  });



  


  $('.desimal').on('input', function(){

    var inputValue = $(this).val();

    var numericValue = inputValue.replace(/\D/g, '');

    var formattedNumber = addCommas(numericValue);

    $(this).val(formattedNumber);

})



function desimal(){
  
  $('.desimal').each(function(){

    var inputValue = $(this).val();

    var numericValue = inputValue.replace(/\D/g, '');

    var formattedNumber = addCommas(numericValue);

    $(this).val(formattedNumber);

})
  

}


function addCommas(number) {
  // Pastikan angka pertama tidak boleh 0
  if (number.length > 1 && number[0] === '0') {
    number = number.substring(1);
  }

  return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}



function printPdf(url) {


  $('#notaid').attr('src',url)
  var iframe = $('#notaid')[0];
  
          $(iframe).on('load', function() {
              var iframeWindow = iframe.contentWindow;
              iframeWindow.print();
          });
  
          if (iframe && iframe.contentWindow && iframe.contentDocument && iframe.contentDocument.readyState === 'complete') {
              var iframeWindow = iframe.contentWindow;
              iframeWindow.print();
          }
  }




  $("#checkall").click(function(){
    // Jika checkbox "Check All" dicentang
    if($(this).prop("checked") == true){
        // Centang semua kotak centang
        $(".checkbox").prop("checked", true);
    } else {
        // Hapus centang dari semua kotak centang
        $(".checkbox").prop("checked", false);
    }

    if($(".checkbox:checked").length > 0){
        // Jika ada, tampilkan tombol yang semula tersembunyi
        $("#menu-edit").fadeIn();
    } else {
        // Jika tidak, sembunyikan tombol
        $("#menu-edit").fadeOut();
    }
});

// Event listener untuk kotak centang individual
$(".checkbox").click(function(){
    // Periksa apakah semua kotak centang dicentang
    if($(".checkbox:checked").length == $(".checkbox").length){
        // Jika ya, centang kotak "Check All"
        $("#checkall").prop("checked", true);
    } else {
        // Jika tidak, hapus centang dari kotak "Check All"
        $("#checkall").prop("checked", false);
    }

    if($(".checkbox:checked").length > 0){
        // Jika ada, tampilkan tombol yang semula tersembunyi
        $("#menu-edit").fadeIn();
    } else {
        // Jika tidak, sembunyikan tombol
        $("#menu-edit").fadeOut();
    }
});


$(document).ready(function(){
  $('#table_data').DataTable({
    paging: false,
    scrollY: '350px',
    scrollX: 'auto',
    order: [],
    searching: false


})


$('.dataTables_info').hide();
})
