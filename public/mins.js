/*$(document).ready(function(){
			$('#get').on('click' , function(event){
				event.preventDefault();
				$.get('/setComment/' , function(data){
					console.log(data);
				});
			});
	});

*/
function Comments(This){
	var data = $(This).serialize();
	
				$.post('/setComment/' ,data)
				.success(function(){
					console.log('suceess');
					refresh('sayed');
					$('.lll').val('');
				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});

}

function Post(This){

	var data = $(This).serialize();
	
				$.post('/addPost' ,data)
				.success(function(){
					//console.log('suceess');
					refresh('test');
					$('.fff').val('');

				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});
}

function Update(This){
	var data = $(This).serialize();
	var ID = $('.commentid').val();
				$.post('/update/' + ID ,data)
				.success(function(){
					console.log('suceess');
					refresh('sayed');
				})
				.error(function(){
					console.log('error');
				})
				.always(function(){

				});
}


function refresh(id){
	$('#'+id).empty().append( 'loading..' );
  $.get(location.href, function(data){
  	//console.log($($.parseHTML(data)).filter('#'+id));
	$('#'+id).empty().append( $($.parseHTML(data)).filter('#'+id) );
  });
}

//post RestFul Api
/*
const userAction = async () => {
  const response = await fetch('http://example.com/movies.json', {
    method: 'POST',
    body: myBody, // string or object
    headers:{
      'Content-Type': 'application/json'
    }
  });
  const myJson = await response.json(); //extract JSON from the http response
  // do something with myJson
}
*/
//Get Restful Api
/*
const userAction = async () => {
  const response = await fetch('http://example.com/movies.json');
  const myJson = await response.json(); //extract JSON from the http response
  // do something with myJson
}
*/