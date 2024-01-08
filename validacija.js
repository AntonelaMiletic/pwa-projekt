$().ready(function() {
    $('#dojmovnik').validate({

      rules: {
        title: {
          minlength: 5,
          maxlength: 30,
        },
        about: {
            minlength: 10,
            maxlength: 100,
        },
        content:{
          required: true,
        },
        photo:{
            required: true,
        },
        category:{
            required: true,
        },
      },

      messages: {
        title: {
          minlength: "<br>Naslov vijesti mora imati 5 do 30 znakova ",
          maxlength: "<br>Naslov vijesti mora imati 5 do 30 znakova ",
          color: "red",
        },
        about: {
          minlength: "<br>Kratki sadržaj vijesti mora imati 10 do 100 znakova ",
          maxlength: "<br>Kratki sadržaj vijesti mora imati 10 do 100 znakova ",
          color: "red",
        },
        content: {
          required: "<br>Tekst vijesti nesmije biti prazan",
          color: "red",
        },
        photo: {
          required: "<br>Slika mora biti odabrana",
          color: "red",
        },
        category: {
          required: "<br>Kategorija mora biti odabrana ",
          color: "red",
        },
     },

      submitHandler: function(form) {
        form.submit();
      }
    });
  });
