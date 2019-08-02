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
    [Activity(Label = "SingInV")]
    public class SingInV : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.SingIn);
            Button Voltar = FindViewById<Button>(Resource.Id.Voltar);
            Voltar.Click += delegate {
                SetContentView(Resource.Layout.activity_main);
                Intent Intent = new Intent(this, typeof(MainActivity));
                StartActivity(Intent);
            };
            Button Looog = FindViewById<Button>(Resource.Id.Log);
            Looog.Click += delegate {
                SetContentView(Resource.Layout.PagAlunoV);
                Intent Intent = new Intent(this, typeof(PagAlunoV));
                StartActivity(Intent);
            };
        }
    }
}