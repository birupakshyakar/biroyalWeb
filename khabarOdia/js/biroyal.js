function openNewsDetails(id){
                var idValue=id;
               // alert(" test id is : "+idValue);
                var data1= { id : idValue };
               // alert(JSON.stringify(data1));
                document.location.href = 'news_detail.php?news_details_value='+idValue;               
            }