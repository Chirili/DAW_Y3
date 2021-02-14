import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SpecialtiesFormComponent } from './specialties-form.component';

describe('SpecialtiesFormComponent', () => {
  let component: SpecialtiesFormComponent;
  let fixture: ComponentFixture<SpecialtiesFormComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ SpecialtiesFormComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(SpecialtiesFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
