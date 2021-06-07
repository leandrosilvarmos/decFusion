package com.example.dacfusion.retrofit

import android.content.Context
import com.example.dacfusion.services.loginUser
import okhttp3.OkHttpClient
import retrofit2.Retrofit
import retrofit2.converter.gson.GsonConverterFactory
import java.security.AccessControlContext
import java.util.concurrent.TimeUnit

object Retrofit {

        lateinit var context: Context
        private const val BASE_URL = "http://192.168.2.20:8000/api/"

    fun <T> provideApi(clazz: Class<T>, context: Context?): T {
        val retrofit = Retrofit
            .Builder()
            .baseUrl(BASE_URL)
            .addConverterFactory(GsonConverterFactory.create())
            .client(okHttpClient(context))
            .build()

       return retrofit.create(clazz)
//        return retrofit.create(loginUser::class.java)

    }




    private fun okHttpClient(context: Context?): OkHttpClient{
        return OkHttpClient
            .Builder()
            .readTimeout(40, TimeUnit.SECONDS)
            .connectTimeout(40, TimeUnit.SECONDS)
            .addInterceptor(AuthInterception(context))
            .build()
    }



//


}


//val instance: loginUser by lazy{
//        val retrofit = Retrofit.
//            Builder()
//            .baseUrl(BASE_URL)
//            .addConverterFactory(GsonConverterFactory.create())
//            .client(okHttpClient)
//            .build()
//
//        retrofit.create(loginUser::class.java)
//    }

//private val okHttpClient = OkHttpClient.Builder()
//    .addInterceptor { chain ->
//        val original = chain.request()
//
//        val requestBuilder = original.newBuilder()
//            .addHeader("Authorization", AUTH)
//            .addHeader("Content-Type", "application/json; charset=UTF-8")
//            .method(original.method(), original.body())
//
//        val request = requestBuilder.build()
//        chain.proceed(request)
//    }.build()
//
//
//val instance: loginUser by lazy {
//    val retrofit = Retrofit.Builder()
//        .baseUrl(com.example.dacfusion.retrofit.Retrofit.BASE_URL)
//        .addConverterFactory(GsonConverterFactory.create())
//        .client(okHttpClient)
//        .build()
//
//    retrofit.create(loginUser::class.java)
//}


//    fun getRetrofitInterface(): Retrofit {
//        val gson = GsonBuilder().setLenient().create()
//        return Retrofit.Builder()
//            .baseUrl("http://192.168.2.20:8000/api/")
//            .addConverterFactory(GsonConverterFactory.create(gson))
//            .build()
//    }