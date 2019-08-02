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
    [Activity(Label = "SingInOrUp")]
    public class SingInOrUp : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.SingInOrUp);
            //Trecho De Trocar Activity
            Button Login = FindViewById<Button>(Resource.Id.Login);
            Button Cadastro = FindViewById<Button>(Resource.Id.Cadastro);
            Button Voltar = FindViewById<Button>(Resource.Id.Voltar);
            Voltar.Click += delegate {
                SetContentView(Resource.Layout.activity_main);
                Intent Intent = new Intent(this, typeof(MainActivity));
                StartActivity(Intent);
            };
            Login.Click += delegate {
                SetContentView(Resource.Layout.SingIn);
                Intent Intent = new Intent(this, typeof(SingIn));
                StartActivity(Intent);
            };
            Cadastro.Click += delegate {
                SetContentView(Resource.Layout.SingUpA); //FAVOR -> Mudar quando o bd sair
                Intent Intent = new Intent(this, typeof(SingUpA));
                StartActivity(Intent);
            };

        }
    }
}