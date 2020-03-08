function openNewsDetails(id)
{
	var idValue=id;
    // alert(" test id is : "+idValue);
    var data1= { id : idValue };
    // alert(JSON.stringify(data1));
    document.location.href = 'news_detail.php?news_details_value='+idValue;               
}
 $("#userLogin").on("click", function(){
 	var username = $("#username").val();
 	var password = $("#password").val();
 	if(username.trim() =="" || password.trim() =="" )
 	{
 		$("#loginResponse").text("Please enter username and password");
 		return false;
 	}
 	//alert("ok_"+username+"_kdsjfkjg_"+password);
 	var data = {};
 	data["username"]= username;
 	data["password"]=password;
 	console.log(data);
 	//alert(JSONstringify(data));
 	$.ajax({
 		url : "login_validator.php",
 		type : "POST" ,
 		data : data,
 		dataType : "json",
 		success : function(response){
 			console.log(response);
 			//alert(response);
 			if(response["message"]=="success")
 			{
 				//alert(response["message"]);
 				window.location="admin.php";						

 			}
 			else
 			{ 				
 				$("#loginResponse").text("Invalid Login Details");

 			}
 			//alert(response);
 			/*if(response["message"]=="error")
 			{
 				$("#loginResponse").text("Invalid Login Details");
 			}*/

 		}

 	});
 });

 $('#news_section_name').on('change', function(){
 	var sectionValue = $('#news_section_name').val();

 	//alert('test value :'+sectionValue);
 	if(sectionValue == 'ନିଯୁକ୍ତି')
 	{
 			$("#job-upload").show();
 			$("#video-upload").hide();
 			$("#news-entry-section").hide();
 	}
 	else if(sectionValue == 'ଭିଡ଼ିଓ')
 	{

 		$("#job-upload").hide();
 		$("#video-upload").show();
 		$("#news-entry-section").hide();

 	}
 	else
 	{

 		$("#job-upload").hide();
 		$("#video-upload").hide();
 		$("#news-entry-section").show();

 	}

 });

 $('#userSubmit').on("click", function(){
 	var name =$('#name').val();
 	var userid = $('#userid').val();
 	var password = $('#user_password').val();
 	var email = $('#email').val();
 	var usertype = $('#user_type').val();

 	var data = {};
 	data["name"]= name;
 	data["password"]=password;
 	data["userid"]= userid;
 	data["email"]=password;
 	data["usertype"]=usertype;
 	console.log(data);
 	$.ajax({
 		url : "user_details.php",
 		type : "POST",
 		data : data,
 		success : function(response){

 			alert(response);
 		}
 	});
 	
 });

  var filename;
                $('#image_path').change(function() {
                    filename = $('#image_path').val();
                    filename = filename.replace(/.*[\/\\]/, '');
                    //alert(filename);
                });

                        
                function fncn(){
                	//console.log($('#multiple_image_path').prop('files'));
                	//var otherImages=$('#multiple_image_path').prop('files');
                	if(multiple_image_path.files.length > 0)
                	{
                		for(var i=0; i< multiple_image_path.files.length; i++)
                		{
                			var name=$('#multiple_image_path').prop('files')[i].name;
                			var fileType = $('#multiple_image_path').prop('files')[i].type;
                			alert(fileType);
                			if(fileType =='image/png' || fileType =='image/jpeg')
                			{
                				//otherImages.push($('#multiple_image_path').prop('files')[i]);               					
                			}
                			else
                			{
                				$("#response").text('Please select jpg or png images');
                					$("#response").css('color', 'red');
                					return;
                			}                			
                			
                		}
                	}
                       //alert(otherImages);
                      // console.log($('#multiple_image_path').prop('files')[0].name);
                      // alert(multiple_image_path.files.length);
                    var news_section_name = document.getElementById("news_section_name").value;
                    var catagory_name = document.getElementById("catagory_name").value;                   
                    var news_title = document.getElementById("news_title").value;
                    var news_content = document.getElementById("news_content").value;
                    var news_date = document.getElementById("news_date").value;

                    if(news_section_name =='' || catagory_name =='' || news_title == '' || news_content == '' || news_date=='')
                    {
                    	$("#response").text('Please fill all the details');
                		$("#response").css('color', 'red');
                		return;
                    }
                    else
                    {
                    	/*$("#response").hide();*/
                    }
                    var file_data_type='';
                    var file_data = '';
                   if(image_path.files.length >0)
                   {
                   	 file_data = $('#image_path').prop('files')[0]; 
                    console.log(file_data);
                     file_data_type = $('#image_path').prop('files')[0].type;
                     alert('File_data_type: '+file_data_type);
                   }
                   else{
                   	$("#response").text('Please upload cover image');
                		$("#response").css('color', 'red');
                		return;
                   }
                    
                    
                    if(file_data_type =='image/png' || file_data_type =='image/jpeg')
                    {
                    	
                    }
                    else
                    {
                    	$("#response").text('Please upload jpg or png images');
                		$("#response").css('color', 'red');
                		return;
                    }
                   /* else{
                    	$("#response").hide();
                    } */ 
                    var form_data = new FormData();                  
                    form_data.append('file', file_data);
                    form_data.append('section', news_section_name);
                    form_data.append('news_title', news_title);
                    form_data.append('news_content', news_content);
                    form_data.append('news_date', news_date);
                    form_data.append('catagory_name', catagory_name);
                    var totalfiles = document.getElementById('multiple_image_path').files.length;
					for (var index = 0; index < totalfiles; index++) {
					   form_data.append("file_other_image[]", document.getElementById('multiple_image_path').files[index]);
					}
                   // form_data.append('file_2', otherImages)
                    //alert(form_data);  
                    console.log(JSON.stringify(form_data));
                    //alert(JSON.stringify(form_data));

                    for (var value of form_data.values()) {
                       console.log(value); 
                    }                  
                     $.ajax({
                        url: "insert_news.php",
                        type: "POST",
                        data: form_data ,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'text',
                        enctype : 'multipart/form-data' ,
                        success: function (data) {
                                //alert(data);
                                $("#response").text(data);
                                $("#response").css("color", "green");
                                //console.log(data.abc);
                           // You will get response from your PHP page (what you echo or print)
                        }   
                    });
                    

                
            }
function fncnVideo()
{
	var video_title = $("#video_title").val();
	var video_link = $("#video_link").val();
	if(video_title!='' && video_link!='')
	{
		var videoData = {};
		videoData["title"] = video_title;
		videoData["link"] = video_link;
		console.log(videoData);
		$.ajax({
			url: "insert_video.php",
			type: "POST",
			data: videoData,
			success: function(data){
				alert(data.trim());
				if(data.trim() == 'duplicate')
				{
					$("#responseVideo").text("video Link already exist, Please uplaod new Link");
					$("#responseVideo").css("color", "red");
				}
				else if(data.trim() == 'error')
				{
					$("#responseVideo").text("Error while inserting data.");
					$("#responseVideo").css("color", "red");
				}
				else if(data.trim() == "success")
				{
					$("#responseVideo").text("Successfully data uploaded");
					$("#responseVideo").css("color", "green");
				}
				
			}

		});
	}
	else
	{
		$("#responseVideo").text("Please Fill all fields");
		$("#responseVideo").css('color', 'red');
	}
}

function fncnJob(){
	var post_name = $("#post_name").val();
	var vacancy_no = $("#vacancy_no").val();
	var job_location = $("#job_location").val();
	var job_description = $("#job_description").val();
	if(post_name !="" && vacancy_no != "" && job_location !='' && job_description !="")
	{
		var jobData = {};
		jobData["post_name"] = post_name;
		jobData["vacancy_no"] = vacancy_no;
		jobData["job_location"] = job_location;
		jobData["job_description"] = job_description;

		console.log(jobData);
		$.ajax({
			url: "insert_job.php",
			type: "POST",
			data: jobData,
			success: function(data){
				alert(data.trim());
				if(data.trim() == 'duplicate')
				{
					$("#responsejob").text("Job POST already exist, Please uplaod new Job");
					$("#responsejob").css("color", "red");
				}
				else if(data.trim() == 'error')
				{
					$("#responsejob").text("Error while inserting data.");
					$("#responsejob").css("color", "red");
				}
				else if(data.trim() == "success")
				{
					$("#responsejob").text("Successfully data uploaded");
					$("#responsejob").css("color", "green");
				}
				
			}

		});

	}
	else{
		$("#responsejob").text("Please Fill all fields");
		$("#responsejob").css('color', 'red');
	}
}
            /*$(".logout").on("click", function(){
                
                		 window.href="logout.php";
                	

                });*/
                

                    
                    //session_destroy();
                    
               
               
           