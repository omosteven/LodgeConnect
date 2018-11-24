(function() {
    'use strict';
    var access = document.getElementById('access');
    access.className = 'hide';
    var sizes = document.getElementById('size');
    sizes.className = 'hide';
    var services = document.getElementById('service');
    services.className = 'hide';
    var lodge = document.getElementById('lodge');
    lodge.className = 'hide';
    var gender = document.getElementById('gender');
    gender.className = 'hide';
    var hostel = document.getElementById('lodge');

    var caller = document.getElementById('type');
    var full_card = document.getElementById('full-card');
    full_card.className = 'hide';
    var lodge_detail = document.getElementById('lodge-detail');
    lodge_detail.className = 'hide';
    var house_detail = document.getElementById('house-detail');
    house_detail.className = 'hide';
    var rent_detail = document.getElementById('rent-detail');
    rent_detail.className = 'hide';
    var hotel_detail = document.getElementById('hotel-detail');
    hotel_detail.className = 'hide';
    var box_down = document.getElementById('box-down');
    box_down.className = 'hide';
    var service_detail = document.getElementById('service-detail');
    service_detail.className = 'hide';
    var access_detail = document.getElementById('access-detail');
    access_detail.className = 'hide';
    
    var full_field = document.getElementById('full-field');
    //full_field.className = 'hide';
    var full_field_change = document.getElementById('full-field-change');
    //hide_sty.className = 'hide';
    //var full_field_change_style = document.querySelector('.full-field-change');
    //var full_field_change_style1 = getComputedStyle(full_field_change_style);
    //var hide_style = document.querySelector('.hide');
    //var hide_style1 = getComputedStyle(hide_style);
    //var full_field_style = document.querySelector('.full-field');
    //var full_field_style1 = getComputedStyle(full_field_style);
    full_field_change.className='hide';
    full_field.className ='full-field';
    var file_container = document.getElementById('file-container');
    file_container.className = 'hide';

    //access.className = 'hide';
    caller.onchange = function() {
        if (this.value == 'access') {
            // access.className = 'barnav';
            access.className = 'barnav';
            sizes.className = 'hide';
            services.className = 'hide';
            lodge.className = 'hide';
            gender.className = 'hide';
            full_card.className = 'full-card';
            lodge_detail.className = 'hide';
            file_container.className = 'file-container';
            house_detail.className = 'hide';
            rent_detail.className = 'hide';
            hotel_detail.className = 'hide';
            service_detail.className = 'hide';
            box_down.className = 'box-down';
            full_field_change.className='full-field-change';
            full_field.className ='hide';
            access_detail.className = 'detail';
        } 

        else if(this.value == 'hotel'){
            access.className = 'hide';
            sizes.className = 'hide';
            services.className = 'hide';
            lodge.className = 'hide';
            gender.className = 'hide';
            full_card.className = 'full-card';
            lodge_detail.className = 'hide';
            file_container.className = 'file-container';
            house_detail.className = 'hide';
            rent_detail.className = 'hide';
            hotel_detail.className = 'detail';
            service_detail.className = 'hide';
            box_down.className = 'box-down';
            full_field_change.className='full-field-change';
            full_field.className='hide';
            access_detail.className = 'hide';
        } 
        else if(this.value == 'services'){
            access.className = 'hide';
            sizes.className = 'hide';
            services.className = 'barnav';
            lodge.className = 'hide';
            gender.className = 'hide';
            full_card.className = 'full-card';
            lodge_detail.className = 'hide';
            file_container.className = 'file-container';
            house_detail.className = 'hide';
            rent_detail.className = 'hide';
            hotel_detail.className = 'hide';
            service_detail.className = 'detail';
            box_down.className = 'box-down';
            full_field_change.className='full-field-change';
            full_field.className='hide';
            access_detail.className = 'hide';
        } 
        else if(this.value == 'lodges'){
            full_card.className = 'full-card';
            lodge_detail.className = 'detail';
            hotel_detail.className = 'hide';
            file_container.className = 'file-container';
            house_detail.className = 'hide';
            rent_detail.className = 'hide';
            box_down.className = 'box-down';
            full_field_change.className='full-field-change';
            full_field.className='hide';
            access.className = 'hide';
            sizes.className = 'hide';
            services.className = 'hide';
            lodge.className = 'barnav';
            gender.className = 'barnav';
            access_detail.className = 'hide';
            service_detail.className = 'hide';
            hostel.onchange = function(){
                if(this.value == 'offk'){
                    gender.className = 'barnav';
                    sizes.className = 'barnav';
                }
                else {
                    sizes.className = 'hide';
                    gender.className = 'barnav';
                }
            }
        }

        else if(this.value == 'rent'){
            full_card.className = 'full-card';
            lodge_detail.className = 'hide';
            file_container.className = 'file-container';
            house_detail.className = 'hide';
            rent_detail.className = 'detail';
            hotel_detail.className = 'hide';
            service_detail.className = 'hide';
            box_down.className = 'box-down';
            access.className = 'hide';
            sizes.className = 'barnav';
            services.className = 'hide';
            lodge.className = 'hide';
            gender.className = 'hide';
            full_field_change.className='full-field-change';
            full_field.className='hide';
            access_detail.className = 'hide';

        }
        else if(this.value == 'house'){
            full_card.className = 'full-card';
            lodge_detail.className = 'hide';
            file_container.className = 'file-container';
            house_detail.className = 'detail';
            rent_detail.className = 'hide';
            hotel_detail.className = 'hide';
            access_detail.className = 'hide';
            service_detail.className = 'hide';
            box_down.className = 'box-down';
            access.className = 'hide';
            sizes.className = 'barnav';
            services.className = 'hide';
            lodge.className = 'hide';
            gender.className = 'hide';
            full_field_change.className='full-field-change';
            full_field.className='hide';
        }
        else if(this.value == 'type'){
            access.className = 'hide';
            sizes.className = 'hide';
            services.className = 'hide';
            lodge.className = 'hide';
            gender.className = 'hide';
            full_card.className = 'hide';
            lodge_detail.className = 'hide';
            file_container.className = 'hide';
            house_detail.className = 'hide';
            rent_detail.className = 'hide';
            hotel_detail.className = 'hide';
            access_detail.className = 'hide';
            service_detail.className = 'hide';
            box_down.className = 'hide';
            full_field_change.className='hide';
            full_field.className='full-field';
        }
        else{
            access.className = 'hide';
            sizes.className = 'barnav';
            services.className = 'hide';
            lodge.className = 'hide';
            gender.className = 'hide';
            full_card.className = 'hide';
            lodge_detail.className = 'hide';
            file_container.className = 'hide';
            house_detail.className = 'hide';
            rent_detail.className = 'hide';
            hotel_detail.className = 'hide';
            service_detail.className = 'hide';
            access_detail.className = 'hide';
            box_down.className = 'hide';
            full_field_change.className='hide';
            full_field.className ='full-field';
        } 
        

        
    };
}());

var loadFile = function(event) {
var image = document.getElementById('output');
image.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile1 = function(event) {
var image1 = document.getElementById('output1');
image1.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile2 = function(event) {
var image2 = document.getElementById('output2');
image2.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile3 = function(event) {
var image3 = document.getElementById('output3');
image3.src = URL.createObjectURL(event.target.files[0]);
};