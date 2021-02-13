import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormvetComponent } from './formvet.component';

describe('FormvetComponent', () => {
  let component: FormvetComponent;
  let fixture: ComponentFixture<FormvetComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FormvetComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FormvetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
