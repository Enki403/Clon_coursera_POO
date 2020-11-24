var informacionArticulos = [
    {imagen:'img/Resources/EMEA-Tile.jpg',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/ResourceTile-2019DataSheet.jpg',pie:'Download',div:'case'},
    {imagen:'img/Resources/Resources-DataInsights.jpg',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-EmergingTechnologies.png',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-eBook-LearningDevelopment.png',pie:'Download',div:'case'},
    {imagen:'img/Resources/Resources-DataSavvy.jpg',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-MaximizeInvestment-2.png',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-eBooks-DataInsights.jpg',pie:'Download',div:'case'},
    {imagen:'img/Resources/Resources-DataProducts-HBR.jpg',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-DigitalTransformation2.png',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-eBook-SoftSkills.jpg',pie:'Download',div:'case'},    
    {imagen:'img/Resources/Resources-Blog-35MillionLearners.jpeg',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-DigitalTransformation.png',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-eBooks-VirtualReality.jpg',pie:'Download',div:'case'},
    {imagen:'img/Resources/Resource-Tile-Skills-Benchmarking-Tool.jpg',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Webcast-DataScience-They-are-not-just-data-scientists.jpg',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-eBooks-SkillsGap-1.jpg',pie:'Download',div:'case'},
    {imagen:'img/Resources/Resources-Article-TalentProfile.png',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-SkillsGap-1.jpg',pie:'Watch Now',div:'webcast'},    
    {imagen:'img/Resources/Resources-CaseStudy-EnglishTeachers-1.png',pie:'Download',div:'case'},    
    {imagen:'img/Resources/Resources-Article-SMB.png',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-AI.jpg',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-CaseStudy-Egypt.png',pie:'Download',div:'case'},
    {imagen:'img/Resources/Resources-Article-WorkforceTransformation.png',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-Bridge.jpg',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-eBooks-LearningTrends.png',pie:'Download',div:'case'},
    {imagen:'img/Resources/Resources-Article-New-Skills.png',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-DesignThinking.jpg',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-Podcast-WorkOfTomorrow.png',pie:'Listen Now',div:'articles'},
    {imagen:'img/Resources/Resources-Webcast-FutureWork.jpg',pie:'Watch Now',div:'webcast'},
    {imagen:'img/Resources/Resources-Article-WorkerRetention.png',pie:'Read More',div:'articles'},
    {imagen:'img/Resources/Resources-Article-MOOC-Training.jpg',pie:'Read More',div:'articles'}
];

var divisiones = [
    {titulo:'WebCast', div:'webcast'},
    {titulo:'Case Studies & eBooks', div:'case'},
    {titulo:'Articles & Blog Posts', div:'articles'}
]

//Aqui se van aÃ±adir las 4 columnas
for(var i = 0; i < divisiones.length; i++){
    $('#div-principal-articulos').append(
        `
        <div class="col-lg-4 col-12" id  = "div-${divisiones[i].div}">
        </div>
        `
    )
}

for(var i = 0; i < divisiones.length; i++){
    document.getElementById('div-'+divisiones[i].div).innerHTML +=
    `
        <h2 class="titulo-articulo-resources">${divisiones[i].titulo}</h2>
    `
}

for(var i = 0; i < informacionArticulos.length; i++){
    console.log('div-'+informacionArticulos[i].div)
    document.getElementById('div-'+informacionArticulos[i].div).innerHTML +=
    `
    <div class="div-articulo-resources">
        <img src="${informacionArticulos[i].imagen}">
        <div class = "div-texto-resources">
            <a>${informacionArticulos[i].pie}</a>
        </div>
    </div>
    `
}