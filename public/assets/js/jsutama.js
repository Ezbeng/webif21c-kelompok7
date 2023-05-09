var form = document.getElementsByClassName("form-barang")[0];
function TambahData() {
    form.action = "tambah-data";
    form.submit();
    form.action = "";
}

function HapusData() {
    form.action = "hapus-data";
    var checkboxes = document.getElementsByClassName('pilih');
    var nama = [];
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            nama.push(checkboxes[i].closest('tr').querySelector('#barang-nama').innerText);
        }
    }

    var inputField = document.querySelector('.barang-nama');
    inputField.value = JSON.stringify(nama);

    form.submit();

    form.action = "";
}


function SetData() {
    var checkboxes = document.getElementsByClassName('pilih');
  
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        var row = checkboxes[i].closest('tr');
        var inputFields = document.querySelectorAll('.field-input input');
  
        for (var j = 0; j < inputFields.length; j++) {
          var fieldValue = row.getElementsByClassName('field-data')[j].innerText;
          inputFields[j].value = fieldValue;
        }
      }
    }
  }

// Mendapatkan elemen-elemen checkbox
var checkboxes = document.getElementsByClassName('pilih');

// Menambahkan event listener ke setiap checkbox
for (var i = 0; i < checkboxes.length; i++) {
  checkboxes[i].addEventListener('change', function() {
    if (this.checked) {
      SetData();
    }
  });
}
function EditData(){
    form.action="edit-data";
    form.submit();
    var inputFields = document.querySelectorAll('.field-input input');
    for(var i = 0; i< inputFields.length; i++){
        inputFields[i].value = "";
    }
    form.action="";
}

  