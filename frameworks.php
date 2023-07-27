<?php

$frameworks = array("Fox Racing V1 Prix Helmet","BILT Amped Evo Helmet","BILT Amped Helmet","Icon Alliance Dark Helmet" , "Sedici Strada II Carbon Helmet","RR Carbon Speciale Helmet","Fox Racing Dirtpaw Race Gloves","Airmatic Gloves","Fox Racing Pawtector Glove","Dirt Kinetic Noiz Gloves","O'Neal Mayhem Savage Gloves","O'Neal Matrix Attack Gloves","Alpinestars Bionic Action Jacket","Bilt Amped Youth Jacket","Thor Guardian Roost Protector","Thor Youth Guardian Roost Protector","Alpinestars A-4 Max Chest Protector","Thor Sentinel GP Chest Protector","Trackside Rear Paddock Stand","Trackside Aluminum MX Lift Stand","Trackside Roll On Wheel Chock","Trackside Universal Head Lift Stand","Trackside Roll On Wheel Chock","Trackside Aluminum MX Lift Stand","Strata Goggles - Mirrored Lens","BILT Illusion Goggles","Goggles - Mirrored Lens","Forma Youth Gravity Boots","Thor Blitz LS Boots
","Fly Racing Dirt Maverik Boots","Fly Racing Dirt Pants","BILT Takedown Pants","BILT Lux Race Pants","Leatt Dual Axis Knee","Thor Sector Knee Guards
","POD K8 V2 Knee Braces
","Head Pullover Hoody","Fly Racing Dirt F-16 Jersey","BILT Amped Evo Jersey","Michelin Commander II Cruiser Tires","Pirelli Diablo Supercorsa V3 Tires","Pirelli Diablo Supercorsa V2 Tire","Michelin Bopper Scooter Tires","Michelin S83 Scooter Tires","Pirelli Diablo Scooter Tires") ;

$name = $_GET["name"];

if (strlen($name) > 0) {

    $match = "";

    for ($i = 0; $i < count($frameworks); $i++) {

        if (strtolower($name) == strtolower(substr($frameworks[$i], 0, strlen($name)))) {

            if ($match == "") {

                $match = $frameworks[$i];

            } else {

                $match = $match . " , " . $frameworks[$i];

            }

        }

    }

}

echo ($match == "") ? 'no match found' : $match;

?>