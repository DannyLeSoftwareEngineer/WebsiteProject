function toggleWireframe() {
  let wfs = document.getElementById("wireframecss");
  let sts = document.getElementById("stylecss");
 

  // repeat for other stylesheets you are linking to
  wfs.disabled = !wfs.disabled;
  sts.disabled = !sts.disabled;
  // repeat for other stylesheets you are linking to

}

function toggleDebugModule() {
	console.log(document.getElementById('debugmod').style.display);
	if(document.getElementById('debugmod').style.display == "block"){
	document.getElementById('debugmod').style.display = "none";
	}
	else if(document.getElementById('debugmod').style.display == "none"){
	document.getElementById('debugmod').style.display = "block";
	}
}

