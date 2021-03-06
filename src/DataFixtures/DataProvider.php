<?php


namespace App\DataFixtures;


class DataProvider
{
    public function getRandomCivility() : string
    {
        return mt_rand(0,1) ? 'm' : 'f';
    }

    public function getArrayOfMailSuffixes() : array
    {
        return ["gmail.com", "yahoo.com", "laposte.net", "hotmail.fr", "outlook.com", "inbox.com", "mail.com", "@icloud.com"];
    }

    public function getArrayOfCities() : array
    {
        return ["Abbeville", "Agde",  "Agen",  "Aix-en-Provence",  "Aix-les-Bains",  "Ajaccio",  "Albi",  "Alençon",  "Alès",  "Alfortville",  "Amiens",  "Angers",  "Anglet",  "Angoulême",  "Annecy",  "Annemasse",  "Antibes",  "Antony",  "Argenteuil",  "Arles",  "Armentières",  "Arras",  "Asnières-sur-Seine",  "Athis-Mons",  "Aubagne",  "Aubervilliers",  "Auch",  "Aulnay-sous-Bois",  "Aurillac",  "Auxerre",  "Avignon",  "Bagneux",  "Bagnolet",  "Baie-Mahault",  "Bastia",  "Bayonne",  "Beaune",  "Beauvais",  "Bègles",  "Belfort",  "Bergerac",  "Besançon",  "Béthune",  "Béziers",  "Bezons",  "Biarritz",  "Blagnac",  "Blois",  "Bobigny",  "Bois-Colombes",  "Bondy",  "Bordeaux",  "Boulogne-Billancourt",  "Boulogne-sur-Mer",  "Bourg-en-Bresse",  "Bourges",  "Bourgoin-Jallieu",  "Brest",  "Brétigny-sur-Orge",  "Brive-la-Gaillarde",  "Bron",  "Bruay-la-Buissière",  "Brunoy",  "Bussy-Saint-Georges",  "Cachan",  "Caen",  "Cagnes-sur-Mer",  "Calais",  "Caluire-et-Cuire",  "Cambrai",  "Cannes",  "Carcassonne",  "Carpentras",  "Castres",  "Cavaillon",  "Cayenne",  "Cenon",  "Cergy",  "Chalon-sur-Saône",  "Châlons-en-Champagne",  "Chambéry",  "Champigny-sur-Marne",  "Champs-sur-Marne",  "Charenton-le-Pont",  "Charleville-Mézières",  "Chartres",  "Châteauroux",  "Châtellerault",  "Châtenay-Malabry",  "Châtillon",  "Chatou",  "Chaumont",  "Chelles",  "Cherbourg-Octeville",  "Choisy-le-Roi",  "Cholet",  "Clamart",  "Clermont-Ferrand",  "Clichy",  "Clichy-sous-Bois",  "Colmar",  "Colombes",  "Colomiers",  "Combs-la-Ville",  "Compiègne",  "Conflans-Sainte-Honorine",  "Corbeil-Essonnes",  "Cormeilles-en-Parisis",  "Coudekerque-Branche",  "Courbevoie",  "Creil",  "Créteil",  "Croix",  "Dammarie-les-Lys",  "Dax",  "Décines-Charpieu",  "Denain",  "Deuil-la-Barre",  "Dieppe",  "Dijon",  "Dole",  "Douai",  "Draguignan",  "Drancy",  "Draveil",  "Dreux",  "Dunkirk",  "Eaubonne",  "Échirolles",  "Élancourt",  "Épernay",  "Épinal",  "Épinay-sur-Seine",  "Ermont",  "Étampes",  "Évreux",  "Évry",  "Fleury-les-Aubrais",  "Fontaine",  "Fontenay-aux-Roses",  "Fontenay-sous-Bois",  "Forbach",  "Fort-de-France",  "Franconville",  "Fréjus",  "Fresnes",  "Frontignan",  "Gagny",  "Gap",  "Garges-lès-Gonesse",  "Gennevilliers",  "Gif-sur-Yvette",  "Gonesse",  "Goussainville",  "Gradignan",  "Grande-Synthe",  "Grasse",  "Grenoble",  "Grigny",  "Guyancourt",  "Haguenau",  "Halluin",  "Hazebrouck",  "Hénin-Beaumont",  "Herblay",  "Hérouville-Saint-Clair",  "Houilles",  "Hyères",  "Illkirch-Graffenstaden",  "Issy-les-Moulineaux",  "Istres",  "Ivry-sur-Seine",  "Joué-lès-Tours",  "Kourou",  "L'Haÿ-les-Roses",  "La Celle-Saint-Cloud",  "La Ciotat",  "La Courneuve",  "La Garde",  "La Garenne-Colombes",  "La Madeleine",  "La Possession",  "La Roche-sur-Yon",  "La Rochelle",  "La Seyne-sur-Mer",  "La Teste-de-Buch",  "La Valette-du-Var",  "Lagny-sur-Marne",  "Lambersart",  "Lanester",  "Laon",  "Laval",  "Le Blanc-Mesnil",  "Le Bouscat",  "Le Cannet",  "Le Chesnay",  "Le Creusot",  "Le Gosier",  "Le Grand-Quevilly",  "Le Havre",  "Le Kremlin-Bicêtre",  "Le Lamentin",  "Le Mans",  "Le Mée-sur-Seine",  "Le Moule",  "Le Perreux-sur-Marne",  "Le Petit-Quevilly",  "Le Plessis-Robinson",  "Le Port",  "Le Robert",  "Le Tampon",  "Lens",  "Les Abymes",  "Les Lilas",  "Les Mureaux",  "Les Pavillons-sous-Bois",  "Les Ulis",  "Levallois-Perret",  "Libourne",  "Liévin",  "Lille",  "Limoges",  "Lisieux",  "Livry-Gargan",  "Longjumeau",  "Loos",  "Lorient",  "Lunel",  "Lyon",  "Mâcon",  "Maisons-Alfort",  "Maisons-Laffitte",  "Malakoff",  "Mandelieu-la-Napoule",  "Manosque",  "Mantes-la-Jolie",  "Marcq-en-Barœul",  "Marignane",  "Marseille",  "Martigues",  "Massy",  "Matoury",  "Maubeuge",  "Meaux",  "Melun",  "Menton",  "Mérignac",  "Metz",  "Meudon",  "Meyzieu",  "Millau",  "Miramas",  "Mons-en-Barœul",  "Mont-de-Marsan",  "Montauban",  "Montbéliard",  "Montélimar",  "Montfermeil",  "Montgeron",  "Montigny-le-Bretonneux",  "Montigny-lès-Metz",  "Montluçon",  "Montmorency",  "Montpellier",  "Montreuil",  "Montrouge",  "Morsang-sur-Orge",  "Mulhouse",  "Muret",  "Nancy",  "Nanterre",  "Nantes",  "Narbonne",  "Neuilly-Plaisance",  "Neuilly-sur-Marne",  "Neuilly-sur-Seine",  "Nevers",  "Nice",  "Nîmes",  "Niort",  "Nogent-sur-Marne",  "Noisy-le-Grand",  "Noisy-le-Sec",  "Orange",  "Orléans",  "Orly",  "Orvault",  "Oullins",  "Oyonnax",  "Palaiseau",  "Pantin",  "Paris",  "Pau",  "Périgueux",  "Perpignan",  "Pessac",  "Petit-Bourg",  "Pierrefitte-sur-Seine",  "Plaisir",  "Poissy",  "Poitiers",  "Pontault-Combault",  "Pontoise",  "Puteaux",  "Quimper",  "Rambouillet",  "Reims",  "Rennes",  "Rezé",  "Rillieux-la-Pape",  "Ris-Orangis",  "Roanne",  "Rochefort",  "Rodez",  "Roissy-en-Brie",  "Romainville",  "Romans-sur-Isère",  "Rosny-sous-Bois",  "Roubaix",  "Rouen",  "Rueil-Malmaison",  "Saint-André",  "Saint-Benoît",  "Saint-Brieuc",  "Saint-Chamond",  "Saint-Cloud",  "Saint-Denis",  "Saint-Denis",  "Saint-Dié-des-Vosges",  "Saint-Dizier",  "Saint-Étienne",  "Saint-Étienne-du-Rouvray",  "Saint-Genis-Laval",  "Saint-Germain-en-Laye",  "Saint-Gratien",  "Saint-Herblain",  "Saint-Joseph",  "Saint-Laurent-du-Maroni",  "Saint-Laurent-du-Var",  "Saint-Leu",  "Saint-Louis",  "Saint-Malo",  "Saint-Mandé",  "Saint-Martin-d'Hères",  "Saint-Maur-des-Fossés",  "Saint-Médard-en-Jalles",  "Saint-Michel-sur-Orge",  "Saint-Nazaire",  "Saint-Ouen",  "Saint-Ouen-l'Aumône",  "Saint-Paul",  "Saint-Pierre",  "Saint-Priest",  "Saint-Quentin",  "Saint-Raphaël",  "Saint-Sébastien-sur-Loire",  "Sainte-Anne",  "Sainte-Foy-lès-Lyon",  "Sainte-Geneviève-des-Bois",  "Sainte-Marie",  "Sainte-Rose",  "Sainte-Suzanne",  "Saintes",  "Salon-de-Provence",  "Sannois",  "Sarcelles",  "Sarreguemines",  "Sartrouville",  "Saumur",  "Savigny-le-Temple",  "Savigny-sur-Orge",  "Schiltigheim",  "Sens",  "Sète",  "Sevran",  "Sèvres",  "Six-Fours-les-Plages",  "Soissons",  "Sotteville-lès-Rouen",  "Stains",  "Strasbourg",  "Sucy-en-Brie",  "Suresnes",  "Talence",  "Tarbes",  "Taverny",  "Thiais",  "Thionville",  "Thonon-les-Bains",  "Torcy",  "Toulon",  "Toulouse",  "Tourcoing",  "Tournefeuille",  "Tours",  "Trappes",  "Tremblay-en-France",  "Troyes",  "Valence",  "Valenciennes",  "Vallauris",  "Vandoeuvre-lès-Nancy",  "Vannes",  "Vanves",  "Vaulx-en-Velin",  "Vélizy-Villacoublay",  "Vénissieux",  "Vernon",  "Versailles",  "Vertou",  "Vichy",  "Vienne",  "Vierzon",  "Vigneux-sur-Seine",  "Villefranche-sur-Saône",  "Villejuif",  "Villemomble",  "Villenave-d'Ornon",  "Villeneuve-d'Ascq",  "Villeneuve-la-Garenne",  "Villeneuve-Saint-Georges",  "Villeneuve-sur-Lot",  "Villeparisis",  "Villepinte",  "Villeurbanne",  "Villiers-le-Bel",  "Villiers-sur-Marne",  "Vincennes",  "Viry-Châtillon",  "Vitrolles",  "Vitry-sur-Seine",  "Wasquehal",  "Wattrelos",  "Yerres"];
    }

    public function getArrayOfBatteryCapacities() : array
    {
        return ["1440", "2000", "3000", "3110", "3340", "4000", "5020"];
    }

    public function getArrayOfWirelessTechnologyNames() : array
    {
        return ["3G", "4G", "Bluetooth", "Wifi", "NFC"];
    }

    public function getArrayOfBrandNames() : array
    {
        return ["Samsung", "Huawei", "Apple", "Xiaomi", "Oppo", "Vivo", "Motorola", "Lenovo", "LG", "Nokia"];
    }

    public function getArrayOfOsNames() : array
    {
        return ["Android", "iOS", "Tizen", "Linux"];
    }

    public function getArrayOfScreenResolutionSizes() : array
    {
        return ["640x1136", "750x1334", "828x1792", "1080x1920", "1080x2160", "1080x2312", "1125x2436", "1242x2688", "1440x2560", "1440x2960"];
    }

    public function getArrayOfScreenTechnologyNames() : array
    {
        return ["LCD", "OLED"];
    }

    public function getArrayOfColorNames() : array
    {
        return ["blue", "red", "pink", "white", "black", "silver", "green", "yellow"];
    }

    public function getArrayOfSimSizeName() : array
    {
        return ["Standard", "Micro", "Nano"];
    }

    public function getArrayOfStorageCapacities() : array
    {
        return [4, 8, 16, 32, 64, 128, 256];
    }
}
