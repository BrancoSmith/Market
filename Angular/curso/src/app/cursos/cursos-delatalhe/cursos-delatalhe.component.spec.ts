import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CursosDelatalheComponent } from './cursos-delatalhe.component';

describe('CursosDelatalheComponent', () => {
  let component: CursosDelatalheComponent;
  let fixture: ComponentFixture<CursosDelatalheComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CursosDelatalheComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CursosDelatalheComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
