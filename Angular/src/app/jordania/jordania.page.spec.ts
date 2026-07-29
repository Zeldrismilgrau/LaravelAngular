import { ComponentFixture, TestBed } from '@angular/core/testing';
import { JordaniaPage } from './jordania.page';

describe('JordaniaPage', () => {
  let component: JordaniaPage;
  let fixture: ComponentFixture<JordaniaPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(JordaniaPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
