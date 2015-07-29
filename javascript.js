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

require_once("checkboxes.php");

$(document).ready(function(){
    //listen to changes happening for teacher dropdown
    $("#teacher").change(function(){
        
        //create variable that will hold our html for classes dropdown
        var html = "";
        
        //get the new teachers userid
        //assuming: <option data-userid=1234 value='Joe Smith'>Joe Smith</option>
        
        var userid= $(this).attr("data-userid");
        
        //build URL for the api
        var url = "https://app.sycamoreeducation.com/api/v1/User/" + userid + "/Classes";
        
        //get JSON data from the api
        $.getJSON(url, function(data){
            
            //loop through all of the data and grab what we need from it
            $.each(data, function(classtype, classes){
                
                $.each(classes, function(classroom){
                    var classID = classroom.ID;
                    var className = classroom.Name;
                    
                    html += "<option value=" + classID + ">" + className + "</option>";
                }); //end classroom loop
                
            }); //end classtype loop
            
            $("#class").append(html);
            
        }); //end getJSON
        
    }); //end change
    
}); //end document ready

