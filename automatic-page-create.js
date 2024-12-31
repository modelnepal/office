const fs = require('fs'); // File system module to write files

// List of page names you want to create with .php extension
const pages = [
    'Designsewa',
    'lokbidhi',
    'adsewa',
    'kinau',
    'cyberpur',
    'ejanakpur',
    'khet',
    'loksewa',
    'lagyo',
    'sanjal',
    'birgunj',
    'pokhara',
    'examaayo',
    'aipik',
    'to-let',
    'Nepdex',
    'Intern',
    'cyberpur',
    'Cyberpur',
    'dimag',
    'Marxmath',
    'Cyberlab',
    'embs',
    'vsakha',
    'Vsakha',
    'yobpo',
    'Yobpo',
    'Sanjalapp',
    'janakam',
    'cryptoMedal',
    'Cakepasal',
    'Mahadev',
    'Zoomgyan',
    'Plotdex',
    'Merokitta',
    'Merokita',
    'lokbidhi',
    'lokbidhi',
    'lokbidhi',
    'Lokbidhi',
    'Kpiviz',
    'Lok-sewa',
    'Kavya-clinic',
    'Guruclub',
    'Fonepasal',
    'Eghat',
    'Demopasal',
    'Bookpasal',
    'Bardibas',
    'Bankloansewa',
    'Nepsegame',
    'Jeloapp',
    'Jelo',
    'Ghardev',
    'Ejanakpur',
    'Ejanakpur',
    'Janakpur',
    'GyanPlan',
    'Khetapp',
    'Gulyo',
    'Lagyo',
    'Khoj',
    'Khoj',
    'Khojseo',
    'Sanjal',
    'Sanjal',
    'Banizya',
    'Bhansar',
    'railport',
    'janakpurjob',
    'Wishqlik',
    'Dltkit',
    'Greenfly',
    'Manishlok',
    'Fonebazar',
    'sastabazar',
    'sastabazar',
    'sastabazar',
    'schoolofapp',
    'groupstudy',
    'appsewa',
    'fbpasal',
    'fbmela',
    'pasal',
    'vsakha',
    'merovote',
    'Fonebazar',
    'co-op',
    'itguru',
    'appanbazar',
    'buysaleapp',
    'chunaab',
    'gyangame',
    'khajaapp',
    'khazaapp',
    'kpojob',
    'lokdev',
    'newsganit',
    'shareganit',
    'stockganit',
    'usglab',
    'yantracup',
    'cyberdesh',
    'garmentmachine',
    'pasalnews',
    'bideh',
    'dimag',
    'pasalnews',
    'bideh',
    'meroloan',
    'karja',
    'nepai',
    'ryc',
    'kittakat'
];

// Loop through the list and create a .php file for each one
pages.forEach(page => {
    const filename = `page-${page}.php`; // Add "page-" before the name
    const content = `
    
<?php
// Include the header section
include('header.php');
?>







<?php
// Include the header section
include('footer.php');
?>`;
    
    // Write the content to the PHP file
    fs.writeFileSync(filename, content);
    console.log(`File ${filename} has been created.`);
});
