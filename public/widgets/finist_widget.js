try {
	var tag;

	tag = document.createElement('link');
	tag.rel = "stylesheet";
	tag.type = "text/css";
	//tag.href = "https://finist.ru/widgets/ipoteka/ipoteka_style.php?wid="+getParameterByName('wid', currentScriptSrc);
	tag.href = "https://finist.ru/widgets/ipoteka/ipoteka_style"+getParameterByName('wid', currentScriptSrc)+".css";
	document.head.appendChild(tag);


	tag = document.createElement('iframe');
	var currentScriptSrc = null;
	if(document.currentScript)
		currentScriptSrc = document.currentScript.src;
	tag.id = "finist__widget__iframe";
	tag.src = "https://finist.ru/widgets/ipoteka/ipoteka.php?wid="+getParameterByName('wid', currentScriptSrc);
	tag.style.cssText = "";
	tag.className = "finist__widget__iframe";
	document.getElementById('finist__widget').appendChild(tag);

} catch(e) {
	console.log(e);
}

function getParameterByName(name, url) {
console.log(url);
console.log(window.location.search);
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

