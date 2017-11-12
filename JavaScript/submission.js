var submissionThrotlling = new submissionThrotlling();

// not working properly
//searchbar.onkeydown = submissionThrotlling.makeDecission();
function submissionThrotlling(){

	this.text = null,
	this.timer,


	//when to send request to the server
	//tipically it sends request to the server 5 min later key pressed in searchbar
	//it wont make earleier request if another key is pressed
	this.makeDecission = function(){
		//alert();
		suggessionDiv.innerHTML = "";
		suggessionDiv.style.visibility="hidden";
		clearTimeout(submissionThrotlling.timer);
		submissionThrotlling.timer = setTimeout("submissionThrotlling.request(searchbar.value)",1000);
	},

	//request part
	//first its checks for data existance in local storage
	//only if not the only sends request to the server to get details
	this.request = function (data) {
		//alert(data);
		submissionThrotlling.text = data;
		if(localStorage.getItem(submissionThrotlling.text)==null) {
			//php need
			$.get("Backend/submissionthrottling.php?data="+data, submissionThrotlling.response);
		}
		/*

		need to take care of other indexs
		ex if request is PESU
		need to check index existance P,PE,PES
		else if(){

		}*/
		else{
			submissionThrotlling.showSuggests(localStorage.getItem(submissionThrotlling.text));
		}
	},

	//Catch response
	//store it in local storage
	this.response = function(responseData) {
		//alert(responseData);
		var theData=responseData.split(";");
		localStorage.setItem(submissionThrotlling.text,theData);
		submissionThrotlling.showSuggests(localStorage.getItem(submissionThrotlling.text));
	},

	this.showSuggests = function(data){
		suggessionDiv.style.visibility="visible";
		var theData=data.split(",");
		//alert(data);
		//check substring
		for(var i=0; i<theData.length; i++) {
			if(theData[i]!= ""){
				//alert(theData[i]);
				suggessionDiv.innerHTML+="<p><div class='innerDiv' onclick='submissionThrotlling.updateSearchBar(\""+theData[i]+"\")' >"+theData[i]+"</div></p>";
			}
		}
	},

	this.updateSearchBar = function(data) {
		searchbar.value = data;
		suggessionDiv.innerHTML = "";
		suggessionDiv.style.visibility="hidden";
		//clear suggession div clear and hide it

	}


}
