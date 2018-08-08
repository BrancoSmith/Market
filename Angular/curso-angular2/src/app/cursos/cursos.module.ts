import { CursosService } from './cursos.service';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CursosComponent } from './cursos.component';
import { CursosDelatalheComponent } from './cursos-delatalhe/cursos-delatalhe.component';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [
    CursosComponent,
    CursosDelatalheComponent
  ],
  exports: [
    CursosComponent
  ],
  providers: [ 
    CursosService
  ]
})
export class CursosModule { }
