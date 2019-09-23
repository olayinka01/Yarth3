var country_arr = new Array("Food & Groceries","Packaged Foods","Drinks","Health & Beauty","Household Items","Computers & Electronics","Restaurants");

var s_a = new Array();
s_a[0]="";
s_a[1]="Fresh Food|Bakery & Pastry|Frozen Food";
s_a[2]="Tin Food|Cereal|Ingredients|Noodles & Pasta|Home Baking|Savoury Spreads";
s_a[3]="Tea & Coffee|Bottled water|Soft Drinks|Food Juice & smoothies|Wine & Spirits|Beer";
s_a[4]="Oral care|Bathroom Items|Hair Care|Make-up|Feminine Care|Male Toiletries|Facial & Bodycare|Perfumes|Hair Dryers & Curling Iron";
s_a[5]="Cleaning Tools|Washing up Items|Laundry|Rolls & Tissue|Home Fragrance|Light Bulbs|Electrical Accessories";
s_a[6]="Phones|Laptops|Desktops|Printers|Scanners|Inverters";
s_a[7]="Mama Cass|Kentucky Fried Chicken|Tasty Fried Chicken|Mr Biggs|Dominos|Tantalizers";


function print_country(country_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(country_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select Category','');
	option_str.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
	}
}

function print_state(state_id, state_index){
	var option_str = document.getElementById(state_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Select Sub-category','');
	option_str.selectedIndex = 0;
	var state_arr = s_a[state_index].split("|");
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}
