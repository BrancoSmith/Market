import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-data-binding',
  templateUrl: './data-binding.component.html',
  styleUrls: ['./data-binding.component.css']
})
export class DataBindingComponent implements OnInit {

  url: string = 'www.xvideos.com';
  cursoAngular: boolean = true;
  urlImage = 'https://4.bp.blogspot.com/-Yl75rTDoHEE/Uwerb6H92yI/AAAAAAAAj-g/f8E92hjnOpw/s1600/lauge+jensen.jpg';
  getValor(){
    return 3;
  }
  getCurtirCurso(){
    return true;
  }
  constructor() { }

  ngOnInit() {
  }

}
