// Declare the variable
var object = {a: {f:'2', b: {c: '99', e: '1'}}, d: '99'};
var nodePaths = [];

// Recursive function.
var getNodePath = function(obj, path) {  
  for( var prop in obj) {
    if (typeof obj[prop] === 'object') {
      // Call the function itself.
      getNodePath(obj[prop], path + '.' + prop);
    }
    else {
      // Update the result set.
      nodePaths.push(path + '.' + prop);
    }
  }
}

// Trigger the recursive function.
getNodePath(object, 'object');

// Print the result.
for (var index in nodePaths) {
  $('.body').append('<p>' + nodePaths[index] + '</p>');      
}