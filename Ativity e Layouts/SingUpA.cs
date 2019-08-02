using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;

namespace AppAlfa
{
    [Activity(Label = "SingUpA")]
    public class SingUpA : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.SingUpA);
            //-----------------
            Button Regina = FindViewById<Button>(Resource.Id.Reg);
            EditText Nome = FindViewById<EditText>(Resource.Id.RegNome);
            EditText Email = FindViewById<EditText>(Resource.Id.RegEmail);
            EditText Senha = FindViewById<EditText>(Resource.Id.RegSenha);
            EditText Matricula = FindViewById<EditText>(Resource.Id.RegMatricula);
            Button Voltar = FindViewById<Button>(Resource.Id.Voltar);
            Voltar.Click += delegate {
                SetContentView(Resource.Layout.activity_main);
                Intent Intent = new Intent(this, typeof(MainActivity));
                StartActivity(Intent);
            };
            Regina.Click += delegate {
                if ((Senha.Text.Length == 8) || (Matricula == null))
                {
                    //avisozinho
                    base.OnCreate(savedInstanceState);
                    Android.App.AlertDialog.Builder didi = new AlertDialog.Builder(this);
                    didi.SetTitle("AvisoBoladao");
                    didi.SetMessage("Boa zero meia, vc tah registrado");
                    didi.SetNegativeButton("is we", (c, ev) => {
                    });
                    didi.Show();
                    //----------
                    //Rodar Nova Pagina
                    //SetContentView(Resource.Layout.PagAlunoA);
                    Intent Intent = new Intent(this, typeof(PagAlunoA));
                    StartActivity(Intent);
                    //----------
                }
                else
                {
                    base.OnCreate(savedInstanceState);
                    Android.App.AlertDialog.Builder dialog = new AlertDialog.Builder(this);
                    dialog.SetTitle("AvisoBoladao");
                    dialog.SetMessage("Mano a senha n tem 8 digitos ou tu n botou a matricula");
                    dialog.SetNegativeButton("beleza", (c, ev) => {
                    });
                    dialog.Show();
                }

            };

        }
    }
}