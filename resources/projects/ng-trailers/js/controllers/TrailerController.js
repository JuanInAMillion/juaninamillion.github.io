app.controller('TrailerController', ['$scope', function($scope) {
  $scope.videos = [
    
    {
        titleid:"marvel",
        jumbotronclass:"marveljumbotron",
        title: "Marvel Universe",
        quote: "You want to protect the world, but you don't want it to change.You're all puppets, tangled in strings... strings! But now I'm free. There are no strings on me!",
        learn: "Learn More",
        videodescription: "Marvel Cinematic Universe Trailers",
        videocommand: "Click on Video",
        col1vid1:{
            link:"https://www.youtube.com/watch?v=tmeOjFno6Do",
            source:"video/marvelavengers2.mp4",
        },
        col1vid2:{
            link:"https://www.youtube.com/watch?v=Ke1Y3P9D0Bc",
            source:"video/marvelironman3.mp4",
        },
        col1vid3:{
            link:"https://www.youtube.com/watch?v=JOddp-nlNvQ",
            source:"video/marvelthor1.mp4",
        },
        col1vid4:{
            link:"https://www.youtube.com/watch?v=8hYlB38asDY",
            source:"video/marvelironman1.mp4",
        },
      
        col2vid1:{
            link:"https://www.youtube.com/watch?v=tbayiPxkUMM",
            source:"video/marvelcaptainamerica2.mp4",
        },
        col2vid2:{
            link:"https://www.youtube.com/watch?v=NPoHPNeU9fc",
            source:"video/marvelavengers1.mp4",
        },
        col2vid3:{
            link:"https://www.youtube.com/watch?v=siQgD9qOhRs",
            source:"video/marvelironman2.mp4",
        },
      
        col3vid1:{
            link:"https://www.youtube.com/watch?v=tvKjS2s1v0k",
            source:"video/marvelthor2.mp4",
        },
        col3vid2:{
            link:"https://www.youtube.com/watch?v=JerVrbLldXw",
            source:"video/marvelcaptainamerica1.mp4",
        },
        col3vid3:{
            link:"https://www.youtube.com/watch?v=xbqNb2PFKKA",
            source:"video/marvelhulk.mp4",
        },
    },
    {   
        titleid:"ff",
        jumbotronclass:"ffjumbotron",
        title: "Fast & Furious",
        quote: "I live my life a quarter mile at a time.",
        learn: "Learn More",
        videodescription: "Fast & Furious Trailers",
        videocommand: "Click on Video",
        col1vid1:{
            link:"https://www.youtube.com/watch?v=Skpu5HaVkOc",
            source:"video/ff7.mp4",
        },
        col1vid2:{
            link:"https://www.youtube.com/watch?v=LdSnZvseggw",
            source:"video/ff4.mp4",
        },
        col1vid3:{
            link:"https://www.youtube.com/watch?v=ZsJz2TJAPjw",
            source:"video/ff1.mp4",
        },
        col1vid4:{
            link:"",
            source:"",
        },
      
        col2vid1:{
            link:"https://www.youtube.com/watch?v=C_puVuHoR6o",
            source:"video/ff6.mp4",
        },
        col2vid2:{
            link:"https://www.youtube.com/watch?v=p8HQ2JLlc4E",
            source:"video/ff3.mp4",
        },
        col2vid3:{
            link:"",
            source:"",
        },
       
      
        col3vid1:{
            link:"https://www.youtube.com/watch?v=nUScwaS4y4w",
            source:"video/ff5.mp4",
        },
        col3vid2:{
            link:"https://www.youtube.com/watch?v=ZZGkV_xWGw4",
            source:"video/ff2.mp4",
        },
        col3vid3:{
            link:"",
            source:"",
        },
           
    },
    {   
        titleid:"hp",
        jumbotronclass:"hpjumbotron",
        title: "Harry Potter",
        quote: "There will come a time when Harry Potter must be told something.But you must wait until Voldemort is at his most vulnerable.",
        learn: "Learn More",
        videodescription: "Harry Potter Trailers",
        videocommand: "Click on Video",
        col1vid1:{
            link:"https://www.youtube.com/watch?v=ICIJk8DgQ_g",
            source:"video/hp8.mp4",
        },
        col1vid2:{
            link:"https://www.youtube.com/watch?v=63KfQ88rtiI",
            source:"video/hp5.mp4",
        },
        col1vid3:{
            link:"https://www.youtube.com/watch?v=uU-ET1FAv3Y",
            source:"video/hp2.mp4",
        },
        col1vid4:{
            link:"",
            source:"",
        },
      
        col2vid1:{
            link:"https://www.youtube.com/watch?v=Jr9OQROqxzE",
            source:"video/hp7.mp4",
        },
        col2vid2:{
            link:"https://www.youtube.com/watch?v=PFWAOnvMd1Q",
            source:"video/hp4.mp4",
        },
        col2vid3:{
            link:"https://www.youtube.com/watch?v=PbdM1db3JbY",
            source:"video/hp1.mp4",
        },
      
        col3vid1:{
            link:"https://www.youtube.com/watch?v=5ywxgP9OudI",
            source:"video/hp6.mp4",
        },
        col3vid2:{
            link:"https://www.youtube.com/watch?v=R69laoH02xg",
            source:"video/hp3.mp4",
        },
        col3vid3:{
            link:"",
            source:"",
        },     
    },
    {
        titleid:"cod",
        jumbotronclass:"codjumbotron",
        title: "Call of Duty",
        quote: "Soldiers stand against their enemies,but Ghosts hunt them.",
        learn: "Learn More",
        videodescription: "Call of Duty Trailers",
        videocommand: "Click on Video",
        col1vid1:{
            link:"https://www.youtube.com/watch?v=sFu5qXMuaJU",
            source:"video/codadvanced.mp4",
        },
        col1vid2:{
            link:"https://www.youtube.com/watch?v=coiTJbr9m04",
            source:"video/codmw3.mp4",
        },
        col1vid3:{
            link:"https://www.youtube.com/watch?v=ETFFyw2Btoc",
            source:"video/codmw1.mp4",
        },
        col1vid4:{
            link:"",
            source:"",
        },
      
        col2vid1:{
            link:"https://www.youtube.com/watch?v=SumIZb6qMJw",
            source:"video/codghost.mp4",
        },
        col2vid2:{
            link:"https://www.youtube.com/watch?v=OtRnpC7ddv8",
            source:"video/codbo1.mp4",
        },
        col2vid3:{
            link:"",
            source:"",
        },
      
        col3vid1:{
            link:"https://www.youtube.com/watch?v=x3tedlWs1XY",
            source:"video/codbo2.mp4",
        },
        col3vid2:{
            link:"https://www.youtube.com/watch?v=429l13dS6kQ",
            source:"video/codmw2.mp4",
        },
        col3vid3:{
            link:"",
            source:"",
        },     
    },
    {
        titleid:"gta",
        jumbotronclass:"gtajumbotron",
        title: "Grand Theft Auto",
        quote: "You forget a thousand things every day, pal. Make sure this is one of 'em",
        learn: "Learn More",
        videodescription: "Grand Theft Auto Trailers",
        videocommand: "Click on Video",
        col1vid1:{
            link:"https://www.youtube.com/watch?v=VjZ5tgjPVfU",
            source:"video/gta5.mp4",
        },
        col1vid2:{
            link:"https://www.youtube.com/watch?v=M80K51DosFo",
            source:"video/gta4.mp4",
        },
        col1vid3:{
            link:"",
            source:"",
        },
        col1vid4:{
            link:"",
            source:"",
        },
      
        col2vid1:{
            link:"https://www.youtube.com/watch?v=Dg8jzTQUgkc",
            source:"video/gta4bogt.mp4",
        },
        col2vid2:{
            link:"https://www.youtube.com/watch?v=2NNSNTYR12M",
            source:"video/gtasa.mp4",
        },
        col2vid3:{
            link:"",
            source:"",
        },
      
        col3vid1:{
            link:"https://www.youtube.com/watch?v=ZrsFIPrM5Bg",
            source:"video/gta4lad.mp4",
        },
        col3vid2:{
            link:"https://www.youtube.com/watch?v=f_VBXRZuHTc",
            source:"video/gtavc.mp4",
        },
        col3vid3:{
            link:"",
            source:"",
        },     
    },    
   
  ]  
}]);