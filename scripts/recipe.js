window.onload = function () {
    
    function isNumber(n) {
        return !isNaN(parseInt(n)) && isFinite(n);
    }
    
    
    
    var submitBtn = document.getElementById('submit');
    
    submitBtn.addEventListener("click", function (event) {
        var nameErrorElement = document.getElementById("nameError");
        var imageErrorElement = document.getElementById("imageError");
        var descriptionErrorElement = document.getElementById("descriptionError");
        
                
        nameErrorElement.innerHTML = "";
        imageErrorElement.innerHTML = "";
        descriptionErrorElement.innerHTML = "";
        
        var nameField = document.getElementById('name');
        var name = nameField.value;
        var imageField = document.getElementById('image');
        var image = imageField.value;
        var descriptionField = document.getElementById('description');
        var description = descriptionField.value;
        var valid = true;
        var dateRegEx = /^\d{2}\/\d{2}\/\d{4}$/;
        
        if (name === "") {
            nameErrorElement.innerHTML = "Recipe Name cannot be blank";
            valid = false;
        }
        if (image === "") {
            imageErrorElement.innerHTML = "Recipe Image cannot be blank";
            valid = false;
        }
        if (description === "") {
            descriptionErrorElement.innerHTML = "Recipe Description cannot be blank";
            valid = false;
        }
        
        if (!valid) {
            event.preventDefault();
        }
    });
};







