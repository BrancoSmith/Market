import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-data-bind',
  templateUrl: './data-bind.component.html',
  styleUrls: ['./data-bind.component.css']
})
export class DataBindComponent implements OnInit {

  url: string = 'http://google.com';
  urldaImagem = 'https://img.elo7.com.br/product/zoom/19F01CD/quadro-paisagem-natureza-lago-arvores-decoracao-salas-05.jpg';
  getValor(){
    return 2;
  }

  getCurtirCurso(){
    return true;
  }
  

  constructor() { }

  ngOnInit() {
  }

}
