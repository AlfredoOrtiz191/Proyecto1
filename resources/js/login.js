var app = new Vue({
    el: '#app',
    data:{
        errorMsg:"",
        successMsg:"",
        showAddModal:false,
        showEditModal:false,
        showDeleteModal:false,
        proveedores:[],
        newProveedor: {id:"", compania:"", correo:"", telefono:""},
        currentProveedor:{}
    },
    mounted: function(){
        this.getAllProveedores();
    },
    methods:{
        
        getAllProveedores(){
            axios.get("http://localhost/Frameworks/Proveedor.php?action=read").then(function(response){
                if(response.data.error)
                    {app.errorMsg=response.data.message;}
                    else
                    {app.proveedores=response.data.proveedores;}
            });
        },
        addProveedor(){
            var formData = app.toFormData(app.newProveedor);
            axios.post("http://localhost/Frameworks/Proveedor.php?action=create",formData).then(function(response){
                app.newProveedor={compania:"", correo:"", telefono:""};
                if(response.data.error)
                {app.errorMsg=response.data.message;}
                else{
                    app.successMsg=response.data.message;
                    app.getAllProveedores();
                }
            });
        },
        selectProveedor(user){
          app.currentProveedor=user;  
        },
        updateProveedor(){
            var formData = app.toFormData(app.currentProveedor);
            axios.post("http://localhost/Frameworks/Proveedor.php?action=update",formData).then(function(response){
                app.currentProveedor={};
                if(response.data.error)
                {app.errorMsg=response.data.message;}
                else{
                    app.successMsg=response.data.message;
                    app.getAllProveedores();
                }
            });
        },

        deleteProveedor(){
            var formData = app.toFormData(app.currentProveedor);
            axios.post("http://localhost/Frameworks/Proveedor.php?action=delete",formData).then(function(response){
                app.currentProveedor={};
                
                if(response.data.error)
                {app.errorMsg=response.data.message;}
                else{
                    app.successMsg=response.data.message;
                    app.getAllProveedores();
                }
            }); 
        },
        clearMsg(){
            app.errorMsg="";
            app.successMsg="";
        },

        toFormData(obj){
            var fd = new FormData();
            for(var i in obj){
                fd.append(i,obj[i]);
            }
            return fd;
        },
    },

});