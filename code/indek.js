var item = prompt("masukan item anda:");

switch(item){
    case 'hoodie':
    case 'sweater':
    case 'bomber':
        alert ("Barang tadi merupkan outer");
        break;
    case 'jeans':
    case 'sweetpants':
        alert ("Baranf tadi merupakan bawahan");
        break;
    default:
        alert("pastikan anda memasukan item yang benar");
}