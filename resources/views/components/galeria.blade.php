<div>
<style>
.galeria {
    float: left;
    width: 80%;
    padding: 10px;
}
.imagem{
    height: 120px;
    width:  120px;
}
.valor{
    color: red;
    font-size:10pt;
    font-weight: bold;
}
.box {
    box-shadow: 6px 6px 13px rgb(0 0 0 / 15%) !important;
    border-radius: 5px 5px;
    background-color: #fff;
    flex: 0 0 225px;
    padding:10px 5px 10px 5px;
    margin: 10px;
    float: left;
    width: 150px;
    min-height: 280px;
}
.box:last-child {
    margin-right: 0;
}

.box:hover {
    box-shadow: 2px 3px 6px rgb(0 0 0 / 10%) !important;
    transition: all .1s !important;
}
</style>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
{{ $slot }}
</div>
