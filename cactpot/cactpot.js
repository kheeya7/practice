var cactpotNum = [0,0,0,0,0,0,0,0,0];

for (var i = 0; i < cactpotNum.length; i++) {
	
	var testNum = Math.floor((Math.random() * 9) + 1);
	
	while (isNumberUsed(testNum))
	{
		testNum = Math.floor((Math.random() * 9) + 1);
	}
	
	cactpotNum[i] = testNum;
    document.getElementById("cell" + i).innerText = "" + cactpotNum[i];
}
	
function isNumberUsed (num){
	
	for (var i=0; i<9; i++)
	{
		if(cactpotNum[i] == num)
			return true;
	}
	
	return false;
}