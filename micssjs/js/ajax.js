function doSearch()
{
	const tableReg = document.getElementById('datos');
	const SearchText= document.getElementById('searchTerm').value.toLowerCase();
	let total = 0;

	//recorremos toda la fila con contenido
	for (let i=1; i<tableReg.rows.length;i++){ 
	//si el td tiene la clase "noSearch" no se busca en su contenido
		if (tableReg.rows[i].classList.contains("noSearch")){ 
		
			continue;
		}

		let found = false ;

		const cellsOfRow = (tableReg.rows[i].getElementsByTagName)
		{
			continue;
		}

}