import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PetTypesFormComponent } from './pet-types-form.component';

describe('PetTypesFormComponent', () => {
  let component: PetTypesFormComponent;
  let fixture: ComponentFixture<PetTypesFormComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ PetTypesFormComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(PetTypesFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
