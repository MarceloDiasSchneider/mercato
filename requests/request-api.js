var myHeaders = new Headers();
myHeaders.append("X-Api-Version", "2.0");
myHeaders.append("Authorization", "Bearer n2YlZlp4gAqCKmTJ9IKj7ycMu8jCHnp2");
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Cookie", "AWSALB=b9+51vG7vq+A22resJgfrigGp/5mYdUY3iAdBgbhgDcmj4jX99n8Y0K38Kt3OFMUn9Iz+HjQ3qZWuQ2XM19+Dvr5Xf5EkUNIWh69j1/HN16i5qRHKSJmq4N2VIM8; AWSALBCORS=b9+51vG7vq+A22resJgfrigGp/5mYdUY3iAdBgbhgDcmj4jX99n8Y0K38Kt3OFMUn9Iz+HjQ3qZWuQ2XM19+Dvr5Xf5EkUNIWh69j1/HN16i5qRHKSJmq4N2VIM8");

var requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow'
};

fetch("https://api.tagplus.com.br/produtos/1", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));