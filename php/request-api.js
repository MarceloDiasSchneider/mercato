function getContent(url){
    let request = new XMLHttpRequest()
    request.open("GET", url, false)
    request.send()
    return request.responseText
}

function main(){
    let access_token = 'gOFtw6arc7gQrI1F87vZcWbxewVuc8MW'
    let url_tagplus = 'https://api.tagplus.com.br/clientes/5?access_token='
    let produto = getContent(url_tagplus+access_token)
    console.log(produto)
}

main()