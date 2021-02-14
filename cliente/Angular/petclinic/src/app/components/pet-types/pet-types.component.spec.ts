import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PetTypesComponent } from './pet-types.component';

describe('PetTypesComponent', () => {
  let component: PetTypesComponent;
  let fixture: ComponentFixture<PetTypesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ PetTypesComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(PetTypesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
