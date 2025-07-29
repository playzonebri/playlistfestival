 
 
      $(document).ready(function(){
    $('#formData').submit(function(e) {
    event.preventDefault();
    
document.getElementById('kirim').innerHTML = "Memproses Cetak Kupon....";


 $.ajax({
 type: 'POST',
 url: 'req/data.php',
 data: $(formData).serialize(),
 datatype: 'text',
 
 complete: function(data) {
            vibr(180);
            console.log('Complete')
   setTimeout(function(){
  window.location.href='proses.html'
 
    }, 3000);
        }
    });
 });
    return false;
});   
     
