
	<?php 
     	
     	$bplan = array("Basic", "Intermediate", "Premium", "VIP");
     	$bizstate = array("Abia","Abuja", "Adamawa", "Akwa-Ibom", "Anambra", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "imo", "jigawa", "Kaduna", "Kano", "Kastina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nasarawa", "Niger", "Ogun", "Ondo", "Osun", "Oyo", "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara");

     	$bizcat = array("Agriculture and Food",
     					"Animal and Pets",
     					"Babies and Kids",
     					"Commercial Equipments and Tools",
     					"Repair and Construction",
     					"Sports, Arts and Outdors",
     					"Vehicles",
     					"Electronics",
     					"Fashion",
     					"Home Funitures and Appliances",
     					"Health and Beauty",
     					"Mobile Phone and Tables",
     					"Properties",
     					"Jobs",
     					"Services",
     					"Others"
     					);

     	function display_value($val)
						{
							if(isset($_POST[$val])) echo $_POST[$val];
						}

					function display_error($err) {
						if(isset($error[$err])) echo $error[$err];
					}
     

     ?>