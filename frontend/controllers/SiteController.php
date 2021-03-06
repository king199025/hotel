<?php
namespace frontend\controllers;

use common\models\db\Tenants;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public $layout = 'page';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'get_tenants' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionMercury_city_tower()
    {
        return $this->render('mercury_city_tower');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionOffices()
    {
        return $this->render('offices');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionApartments()
    {
        return $this->render('apartments');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionRetail()
    {
        $tenants = Tenants::find()->where(['level' => 1])->all();
        return $this->render('retail',['tenants' => $tenants]);
    }


    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionInfrastructure()
    {

        return $this->render('mercury-city-tower/infrastructure');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionMembers()
    {

        return $this->render('mercury-city-tower/members');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionOfficestech()
    {

        return $this->render('offices/tech');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionPlanning()
    {

        return $this->render('offices/planning');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionPlan()
    {

        return $this->render('apartments/planning');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionFinishing()
    {

        return $this->render('apartments/finishing');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionExcursion()
    {

        return $this->render('apartments/excursion');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionTenants()
    {
        return $this->render('renters');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionPlanirovkariteil()
    {
        return $this->render('retail/planirovkariteil');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionExcursionretail()
    {
        return $this->render('retail/excursion');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionGalleries()
    {
        return $this->render('galleries');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionGet_tenants(){
        $tenants = Tenants::find()->where(['level' => $_POST['level']])->all();
        return $this->renderPartial('tenants',['tenants' => $tenants]);

    }
}
