$(function(){
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                
                if(data == "ErroUser"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Usuário ou Email vazio ou é inexistente',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroPass"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })  
                    Toast.fire({
                        icon: 'error',
                        title: 'Campo Senha é obrigatório'
                    })
                }
                if(data == "ErroLogin"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })  
                    Toast.fire({
                        icon: 'error',
                        title: 'Email ou senha não encontrados'
                    })
                }
                if(data == "sucess"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })  
                    Toast.fire({
                        icon: 'success',
                        title: 'Login realizado com sucesso'
                    })
                }
                
            },
        });
        return false;
    });
});
$(function(){
    $('#cadastro').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data)
            {
                if(data == "ErroNome"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Nome vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroCPF"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo CPF vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroCPFExiste"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo CPF já cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroUser"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Usuário vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroUserExiste"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Usuário já cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroEmail"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Email vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroEmailExiste"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Email já cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroSenha"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })  
                    Toast.fire({
                        icon: 'error',
                        title: 'Campo Senha é obrigatório'
                    })
                }
                if(data == "ErroSenha2"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })  
                    Toast.fire({
                        icon: 'error',
                        title: 'Campo Confirmar Senha é obrigatório'
                    })
                }
                if(data == "ErroSenhaNaoConfere"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })  
                    Toast.fire({
                        icon: 'error',
                        title: 'Senhas não conferem'
                    })
                }
                if(data == "ErroCadastro"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })  
                    Toast.fire({
                        icon: 'error',
                        title: 'Erro ao cadastrar usuário, desculpe tente novamente mais tarde!'
                    })
                }
                if(data == "sucess"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })  
                    Toast.fire({
                        icon: 'success',
                        title: 'Cadastro realizado com sucesso'
                    })
                }
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora

