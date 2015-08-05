/* 
 * Copyright (C) 2015 Joe
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$(document).ready(function(){
    //listen to changes happening for teacher dropdown
    $("#teacher").attr("name");
    
    $("#teacher").change(function(){
        //create variable that will hold our html for classes dropdown
        var html = "";
        
        //get the new teachers userid
        //assuming: <option data-userid=1234 value='Joe Smith'>Joe Smith</option>
        
        var userid= $('option:selected', this).attr('data-userID');
        var select= '<%= Session["UserID"] %>';
        alert(select);
        
        //build URL for the api
        var url = "https://app.sycamoreeducation.com/api/v1/User/" + userid + "/Classes";
        
         $.ajax({
           url: url,
           type: "GET",
           datatype: 'json',
           processData: false,
           beforeSend: function(xhr){
                var access_token = "68973ad5c20c17627388278f22b40caa2bd91898";
                xhr.setRequestHeader('Authorization', 'Bearer '+access_token);
           }
        })
        .done(function(data, statusText, xhr){

            //loop through all of the data and grab what we need from it
            $.each(data, function(classtype, classes){
                
                $.each(classes, function(key, classroom){
                    
                    var classID = classroom.ID;
                    var className = classroom.Name;
                    var selected = "";
                    
                    if(className === select) selected = "selected=selected";
                    else selected = "";
                    
                    html += "<option data-classID=" + "'" + classID + "' " + "value=" + "'" + className + "'" + ">" + className + "</option>";
                    
                    alert(html);
                    
                }); //end classroom loop
            }); //end classtype loop
            
            $("#class").html(html);
        })
        .fail(function(xhr, statusText, errorThrown) {
            console.log("Failed to connect to API"); 
        });
        
        //get JSON data from the api
        /*$.getJSON(url, function(data){
            
            alert("here");
            
            //loop through all of the data and grab what we need from it
            $.each(data, function(classtype, classes){
                
                $.each(classes, function(classroom){
                    var classID = classroom.ID;
                    var className = classroom.Name;
                    
                    html += "<option value=" + classID + ">" + className + "</option>";
                    alert(html);
                }); //end classroom loop
                
            }); //end classtype loop
            
            $("#class").append(html);
            
        }); //end getJSON/**/
        
    }); //end change
    
}); //end document ready

