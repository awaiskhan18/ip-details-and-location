function get_loc()
        {
            $.ajax({
                url: "https://api.ipdata.co/?api-key=a4567275964d43ed85ebe55ec0f56dfe34e71117e81e2fdff580d403",
                type: 'GET',
                success: function (data) {
                    alert(data.country_code.toLowerCase());
                },
                error: function(data){
                    alert("Cannot get data");
                }
            });
        }
        
        
        get_loc();
