<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function alert(type,msg,position='body'){
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

        if(position=='body'){
            document.body.append(element);
            element.classList.add('custom-alert');
        }else{
            document.getElementById(position).appendChild(element);
        }
        setTimeout(remAlert, 3000);
    }

    function remAlert(){
        document.getElementsByClassName('alert')[0].remove();
    }

    let register_form = document.getElementById('register-form');

    register_form.addEventListener('submit', (e)=>{
        e.preventDefault();

        let data = new FormData();

        data.append('first_name', register_form.elements['first_name'].value);
        data.append('last_name', register_form.elements['last_name'].value);
        data.append('email', register_form.elements['email'].value);
        data.append('dob', register_form.elements['dob'].value);
        data.append('address', register_form.elements['address'].value);
        data.append('password', register_form.elements['password'].value);
        data.append('register', '');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);

        xhr.onload = function()
        {
            if(this.responseText == 'mail_failed'){
                alert('error', "Cannot send email confirmation, Server Down!");
            }else if(this.responseText == 'email_already'){
                alert('error', 'Email is already used. Use another email');
            }
            else{
                alert('success', "Registration Successful, Check your email to verify your account!");
                register_form.reset();
            }
        }
        xhr.send(data);
    });

</script>