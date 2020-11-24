var divisiones = [
    {titulo:'Data Science',div:'data',habilitado:true,cantidad:3},
    {titulo:'Computer Science',div:'computer',habilitado:false,cantidad:2},
    {titulo:'LeaderShip',div:'leadership',habilitado:false,cantidad:2},
];

var infrmacionDivisiones = [
    {
        titulo:'Machine Learning & Artificial Intelligence',
        descripcion:'This Course Collection focuses on the cutting-edge field of machine learning, which leverages artificial intelligence to provide computer systems with the ability to automatically learn and improve from experience.',
        img:'../../img/content/deeplearning.png',
        img1:'../../img/content/Content-CollectionPartner-UW.png',
        img2:'../../img/content/icl.jpg',
        img3:'../../img/content/course3-logo.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'5',
        imagenDer:'Collections-Tile-AI.jpg',
        div:'data'

    },
    {
        titulo:'Data Science for Business Leaders',
        descripcion:'This Collection is designed to help business leaders build a strong and sustainable data and analytics organization, and allow them to be conversant in the fast-growing field of data-science. ',
        img:'../../img/content/deeplearning.png',
        img1:'../../img/content/Content-CollectionPartner-UW.png',
        img2:'../../img/content/icl.jpg',
        img3:'../../img/content/course3-logo.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'5',
        imagenDer:'Collections-Tile-DataScience.jpg',
        div:'data'

    },
    {
        titulo:'Data Science for Data Engineers',
        descripcion:'This Course Collection is for those who build, design and maintain data warehouses and tools in order to assure data is clean, trustworthy and usable.',
        img:'../../img/content/cu.png',
        img1:'../../img/content/ucd.png',
        img2:'../../img/content/uofm.png',
        img3:'../../img/content/nyu.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'5',
        imagenDer:'CollectionTile-DataScienceBusinessAnalysts.jpg',
        div:'data'

    },
    {
        titulo:'Data Science for Business Analysts',
        descripcion:'This Course Collection helps Analysts learn to translate their organization’s data into reports and simple visualizations to communicate findings.',
        img:'../../img/content/cu.png',
        img1:'../../img/content/ucd.png',
        img2:'../../img/content/uofm.png',
        img3:'../../img/content/nyu.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'5',
        imagenDer:'CollectionTile-DataScienceBusinessAnalysts.jpg',
        div:'data'

    },
    {
        titulo:'Becoming a Data Scientist',
        descripcion:'This Course Collection is designed to take a learner from basic quantitative facility to a practicing data scientist, focusing on the R programming language.',
        img:'../../img/content/Home-CollectionPartner-Duke.png',
        img1:'../../img/content/ucd.png',
        img2:'../../img/content/Johns-Hopkins-Collections-Home.png',
        img3:'../../img/content/Content-CollectionPartner-Amsterdam.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'10',
        imagenDer:'CollectionTile-DataScienceBusinessAnalysts.jpg',
        div:'data'

    },
    {
        titulo:'Machine Learning & Artificial Intelligence',
        descripcion:'This Course Collection focuses on the cutting-edge field of machine learning, which leverages artificial intelligence to provide computer systems with the ability to automatically learn and improve from experience.',
        img:'../../img/content/deeplearning.png',
        img1:'../../img/content/Content-CollectionPartner-UW.png',
        img2:'../../img/content/icl.jpg',
        img3:'../../img/content/course3-logo.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'5',
        imagenDer:'Collections-Tile-AI.jpg',
        div:'data'
    },
    {
        titulo:'Web Development',
        descripcion:'Designed for anyone who is interested in web development, this Course Collections provides learners with the skills needed to develop compelling web sites and web apps.',
        img:'../../img/content/Home-CollectionPartner-JohnsHopkins.png',
        img1:'../../img/content/course3-logo.png',
        img2:'../../img/content/Hong-Kong-University-Collections-Home.png',
        img3:'',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'8',
        imagenDer:'Collections-Tile-WebDevelopment.jpg',
        div:'computer'

    },
    {
        titulo:'Python Development',
        descripcion:'Designed for both experienced developers transitioning into Python and new entrants, this Course Collection will prepare learners to program and advance their programming skills in the Python programming language.',
        img:'../../img/content/Content-CollectionPartner-Wesleyan.png',
        img1:'../../img/content/Content-CollectionPartner-Michigan.png',
        img2:'../../img/content/Content-CollectionPartner-Rice.png',
        img3:'../../img/content/Content-CollectionPartner-Toronto.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'10',
        imagenDer:'Collections-Tile-PythonDevelopment.jpg',
        div:'computer'

    },
    {
        titulo:'Mobile Development',
        descripcion:'This Course Collection enables learners with the skills and knowledge required to design, develop, and publish iOS and Android apps.',
        img:'../../img/content/Content-CollectionPartner-UCI.png',
        img1:'../../img/content/Content-CollectionPartner-Vanderbilt.png',
        img2:'../../img/content/Content-CollectionPartner-Toronto.png',
        img3:'',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'10',
        imagenDer:'Collections-Tile-MobileDevelopment.jpg',
        div:'computer'
    },
    {
        titulo:'Management Essentials',
        descripcion:'This Course Collection is designed to provide aspiring people managers with core management skills in people management, operations management, financial management, and coaching.',
        img:'../../img/content/Content-CollectionPartner-Rice.png',
        img1:'../../img/content/Content-CollectionPartner-Vanderbilt.png',
        img2:'../../img/content/Content-CollectionPartner-Illinois.png',
        img3:'../../img/content/ucd.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'7',
        imagenDer:'Collections-Tile-ManagementEssentials.jpg',
        div:'leadership',

    },
    {
        titulo:'Diversity & Inclusion',
        descripcion:'This Course Collection contains courses on diversity and inclusion in hiring and culture building, including gender diversity, neurodiversity, ethnic diversity, sexual orientation diversity, cultural diversity, and more.',
        img:'../../img/content/Content-CollectionPartner-Case-1.png',
        img1:'../../img/content/Content-CollectionPartner-UF-1.png',
        img2:'../../img/content/Content-CollectionPartner-Pitt-1.png',
        img3:'',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'4',
        imagenDer:'Collections-Tile-DiversityInclusion.jpg',
        div:'leadership',

    },
    {
        titulo:'Influence & Negotiation',
        descripcion:'This Course Collection is designed to provide core managerial skills in people management, operations management, financial management, and coaching.',
        img:'../../img/content/Northwestern.png',
        img1:'../../img/content/course3-logo.png',
        img2:'../../img/content/Yale-University.png',
        img3:'../../img/content/Content-CollectionPartner-UW.png',
        lista:['Neural Networks and Deep Learning','Machine Learning Foundations: A Case Study Approach','Machine Learning: Regression','Mathematics for Machine Learning: Linear Algebra','Programming for Everybody (Getting Started with Python)'],
        cantidadCursos:'6',
        imagenDer:'Collections-Tile-DiversityInclusion.jpg',
        div:'leadership',

    },
]

for(var i = 0; i < divisiones.length; i++){
    $('#ul-divisiones').append(
        `
            <li id = "li-${divisiones[i].div}">${divisiones[i].titulo}</li>    
        `
        )
    $('#divs-carousel').append(
        `
            <div id="div-carousel-${divisiones[i].div}">
                <div id="carousel-${divisiones[i].div}" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" id="indicador-${divisiones[i].div}">
                        <li data-target="#carousel-${divisiones[i].div}" data-slide-to="0" class="active"></li>
                    </ol>    
                <div>
            </div>
        `
        )
        if(divisiones[i].habilitado == true){
            $('#div-carousel-'+divisiones[i].div).css('display','block')
        }else{
            $('#div-carousel-'+divisiones[i].div).css('display','none')
        }
        for(var j = 0; j < divisiones[i].cantidad - 1 ; j++){
            $('#indicador-'+divisiones[i].div).append(
                `
                <li data-target="#carousel-${divisiones[i].div}" data-slide-to="${j+1}" class="active"></li>
                `
            )
        }
        $('#carousel-'+divisiones[i].div).append(
            `
                <div class="carousel-inner" id = "inner-${divisiones[i].div}">
                    <div class="carousel-item active">
                        <div class = "container-fluid">
                            <div class = "row" id = "carousel-item-${divisiones[i].div}-0">
                            </div>
                        </div>
                    </div>
                </div>
            `
        )
        for(var j = 0 ; j < divisiones[i].cantidad -1; j++ ){
            $('#inner-'+divisiones[i].div).append(
                `
                <div class="carousel-item">
                    <div class = "container-fluid">
                        <div class = "row" id = "carousel-item-${divisiones[i].div}-${j+1}">
                        </div>
                    </div>
                </div>
                `
            )
        }

}
/*En esta parte se van agregar los cursos**/

for(var i = 0; i < infrmacionDivisiones.length; i++){
    for(var j = 0; j < divisiones.length; j++){
        if($("#carousel-item-" + infrmacionDivisiones[i].div + "-" + j + "> div").length < 2){
            console.log(i)
            $('#carousel-item-' + infrmacionDivisiones[i].div + "-" + j).append(
                `
               <div class="col-lg-6 d-none d-lg-block contenedor-incarousel-principal">
                   <div class="contenedor-incarousel">
                       <div class="div-izquierdo">
                           <div class="div-izq-texto">
                               <h2>${infrmacionDivisiones[i].titulo}</h2>
                               <p>${infrmacionDivisiones[i].descripcion}</p>
                           </div>
                           
                           <div class="div-izq-img d-none d-xl-block">
                               <img src="${infrmacionDivisiones[i].img}">
                               <img src="${infrmacionDivisiones[i].img1}">
                               <img src="${infrmacionDivisiones[i].img2}">
                               <img src="${infrmacionDivisiones[i].img3}">    
                            </div>
                       </div>
                       <div class="div-derecho">
                           <img class="imagen-superpuesta" src="../../img/content/blue-tri.png" alt="">
                           <img src="../../img/content/${infrmacionDivisiones[i].imagenDer}" alt="">
                           <span class="span-img">${infrmacionDivisiones[i].cantidadCursos} course collection</span>
                       </div>
                   </div>
                   <div class="contenedor-incarousel-superpuesto">
                       <div class="div-lista-incarousel">
                           <h2>Data Science for Business Leaders</h2>
                           <ul class="lista-incarousel">
                               <li>Neural Networks and Deep Learning</li>
                               <li>Machine Learning Foundations: A Case Study Approach</li>
                               <li>Machine Learning: Regression</li>
                               <li>Mathematics for Machine Learning: Linear Algebra</li>
                               <li>Programming for Everybody (Getting Started with Python)</li>
                           </ul>
                       </div>
                   </div>
               </div>                    
                `
            )
            j = divisiones.length + 1
        }    
    }
}

for(var i = 0; i < divisiones.length; i++){
    $('#carousel-' + divisiones[i].div).carousel({
        interval:false
    })
}
$('#li-data').css('color','#AC92EC');
$('#li-data').css('text-decoration','underline');


$("#li-data").click(function(){
    $("#div-carousel-data").show();
    $("#div-carousel-computer").hide();
    $("#div-carousel-leadership").hide();
    $('#li-data').css('color','#AC92EC');
    $('#li-data').css('text-decoration','underline');
    $('#li-computer').css('text-decoration','none');
    $('#li-computer').css('color','#3BAFDA');
    $('#li-leadership').css('text-decoration','none');
    $('#li-leadership').css('color','#3BAFDA');
})

$("#li-computer").click(function(){
    $("#div-carousel-computer").show();
    $("#div-carousel-data").hide();
    $("#div-carousel-leadership").hide();
    $('#li-computer').css('color','#AC92EC');
    $('#li-computer').css('text-decoration','underline');
    $('#li-data').css('text-decoration','none');
    $('#li-data').css('color','#3BAFDA');
    $('#li-leadership').css('text-decoration','none');
    $('#li-leadership').css('color','#3BAFDA');
})

$("#li-leadership").click(function(){
    $("#div-carousel-leadership").show();
    $("#div-carousel-data").hide();
    $("#div-carousel-computer").hide();
    $('#li-leadership').css('color','#AC92EC');
    $('#li-leadership').css('text-decoration','underline');
    $('#li-computer').css('text-decoration','none');
    $('#li-computer').css('color','#3BAFDA');
    $('#li-data').css('text-decoration','none');
    $('#li-data').css('color','#3BAFDA');
})